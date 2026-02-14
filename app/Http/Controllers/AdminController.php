<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'total_orders' => Order::count(),
            'total_revenue' => Order::where('status', 'completed')->sum('total'),
            'total_products' => Product::count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'recent_orders' => Order::with('user')->latest()->take(5)->get(),
        ];

        return Inertia::render('Admin/Dashboard', [
            'stats' => $stats
        ]);
    }

    public function users()
    {
        $users = User::withCount(['orders'])
            ->withSum('orders', 'total')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role,
                    'orders_count' => $user->orders_count,
                    'total_spent' => $user->orders_sum_total ?? 0,
                    'created_at' => $user->created_at,
                ];
            });

        return Inertia::render('Admin/Users', [
            'users' => $users,
            'stats' => [
                'total_users' => User::count(),
                'users_with_orders' => User::has('orders')->count(),
                'total_revenue_from_users' => Order::where('status', 'completed')->sum('total'),
            ]
        ]);
    }

    public function purchasesByUser()
    {
        $userPurchases = User::with(['orders' => function($query) {
            $query->with('items.product')->latest();
        }])
        ->has('orders')
        ->get()
        ->map(function($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'total_orders' => $user->orders->count(),
                'total_spent' => $user->orders->sum('total'),
                'orders' => $user->orders,
            ];
        });

        return Inertia::render('Admin/PurchasesByUser', [
            'userPurchases' => $userPurchases
        ]);
    }

    public function financial()
    {
        $today = now();
        $thisMonth = now()->startOfMonth();
        $lastMonth = now()->subMonth()->startOfMonth();

        $financial = [
            // Revenue
            'total_revenue' => Order::where('status', 'completed')->sum('total'),
            'revenue_today' => Order::where('status', 'completed')
                ->whereDate('created_at', $today)
                ->sum('total'),
            'revenue_this_month' => Order::where('status', 'completed')
                ->whereDate('created_at', '>=', $thisMonth)
                ->sum('total'),
            'revenue_last_month' => Order::where('status', 'completed')
                ->whereBetween('created_at', [$lastMonth, $thisMonth])
                ->sum('total'),
            
            // Orders
            'total_orders' => Order::count(),
            'completed_orders' => Order::where('status', 'completed')->count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'cancelled_orders' => Order::where('status', 'cancelled')->count(),
            
            // Average Order Value
            'average_order_value' => Order::where('status', 'completed')->avg('total'),
            
            // Revenue by Month (last 12 months)
            'revenue_by_month' => Order::where('status', 'completed')
                ->where('created_at', '>=', now()->subYear())
                ->selectRaw("strftime('%Y-%m', created_at) as month, SUM(total) as revenue, COUNT(*) as orders")
                ->groupBy('month')
                ->orderBy('month')
                ->get(),
            
            // Top Products by Revenue
            'top_products' => DB::table('order_items')
                ->join('products', 'order_items.product_id', '=', 'products.id')
                ->join('orders', 'order_items.order_id', '=', 'orders.id')
                ->where('orders.status', 'completed')
                ->select('products.name', 
                    DB::raw('SUM(order_items.quantity) as units_sold'),
                    DB::raw('SUM(order_items.price * order_items.quantity) as revenue'))
                ->groupBy('products.id', 'products.name')
                ->orderByDesc('revenue')
                ->take(10)
                ->get(),
        ];

        return Inertia::render('Admin/Financial', [
            'financial' => $financial
        ]);
    }

    public function subscriptions()
    {
        // Get all subscription products
        $subscriptionProducts = Product::where('category', 'subscription')
            ->withCount(['orderItems'])
            ->get()
            ->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'subscribers_count' => DB::table('order_items')
                        ->join('orders', 'order_items.order_id', '=', 'orders.id')
                        ->where('order_items.product_id', $product->id)
                        ->where('orders.status', 'active')
                        ->distinct('orders.user_id')
                        ->count('orders.user_id'),
                    'subscription_interval' => 'Monthly',
                ];
            });

        // Get active subscriptions (recurring orders)
        $activeSubscriptions = Order::whereIn('status', ['active', 'pending'])
            ->with(['user', 'items.product'])
            ->whereHas('items.product', function($query) {
                $query->where('category', 'subscription');
            })
            ->get()
            ->map(function($order) {
                $product = $order->items->first()?->product;
                return [
                    'id' => $order->id,
                    'user' => $order->user ? [
                        'name' => $order->user->name,
                        'email' => $order->user->email,
                    ] : null,
                    'product' => $product ? [
                        'name' => $product->name,
                    ] : null,
                    'status' => $order->status,
                    'amount' => $order->total,
                    'next_billing_date' => $order->created_at->addMonth()->format('Y-m-d'),
                ];
            });

        $activeCount = $activeSubscriptions->count();
        $mrr = $activeSubscriptions->where('status', 'active')->sum('amount');

        return Inertia::render('Admin/Subscriptions', [
            'subscriptions' => [
                'active_count' => $activeCount,
                'mrr' => $mrr,
                'products' => $subscriptionProducts,
                'active' => $activeSubscriptions,
            ]
        ]);
    }

    public function payments()
    {
        // Get all orders as payments
        $allPayments = Order::with(['user', 'items.product'])
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function($order) {
                return [
                    'id' => $order->id,
                    'order_id' => $order->id,
                    'amount' => $order->total,
                    'status' => $order->status,
                    'payment_method' => $order->payment_method ?? 'card',
                    'payment_date' => $order->created_at->format('Y-m-d H:i'),
                    'order' => [
                        'user' => $order->user ? [
                            'name' => $order->user->name,
                            'email' => $order->user->email,
                        ] : [
                            'name' => $order->customer_name ?? 'Guest',
                            'email' => $order->customer_email ?? 'N/A',
                        ]
                    ]
                ];
            });

        // Get past due payments (orders older than 7 days that are still pending)
        $pastDuePayments = Order::where('status', 'pending')
            ->where('created_at', '<', now()->subDays(7))
            ->with(['user'])
            ->get()
            ->map(function($order) {
                $daysOverdue = now()->diffInDays($order->created_at);
                return [
                    'id' => $order->id,
                    'order_id' => $order->id,
                    'amount' => $order->total,
                    'payment_date' => $order->created_at->format('Y-m-d'),
                    'days_overdue' => $daysOverdue,
                    'order' => [
                        'user' => $order->user ? [
                            'name' => $order->user->name,
                            'email' => $order->user->email,
                        ] : [
                            'name' => $order->customer_name ?? 'Guest',
                            'email' => $order->customer_email ?? 'N/A',
                        ]
                    ]
                ];
            });

        return Inertia::render('Admin/Payments', [
            'payments' => [
                'all' => $allPayments,
                'past_due' => $pastDuePayments,
            ],
            'stats' => [
                'total_paid' => Order::where('status', 'completed')->sum('total'),
                'total_pending' => Order::where('status', 'pending')->sum('total'),
                'total_past_due' => $pastDuePayments->sum('amount'),
            ]
        ]);
    }

    public function analytics()
    {
        // Site traffic and conversion analytics
        $totalUsers = User::count();
        $usersWithPurchases = User::has('orders')->count();
        $usersWithoutPurchases = $totalUsers - $usersWithPurchases;
        
        // Get user activity details
        $userActivity = User::withCount(['orders'])
            ->withSum('orders', 'total')
            ->orderBy('orders_count', 'desc')
            ->take(50)
            ->get()
            ->map(function($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'orders_count' => $user->orders_count ?? 0,
                    'total_spent' => $user->orders_sum_total ?? 0,
                ];
            });

        $analytics = [
            'total_users' => $totalUsers,
            'total_purchases' => Order::where('status', 'completed')->count(),
            'conversion_rate' => $totalUsers > 0 
                ? round(($usersWithPurchases / $totalUsers) * 100, 2)
                : 0,
            
            // Users who purchased
            'users_with_purchases' => $usersWithPurchases,
            'users_without_purchases' => $usersWithoutPurchases,
            
            // New vs Returning Customers
            'new_customers_this_month' => User::whereDate('created_at', '>=', now()->startOfMonth())->count(),
            'returning_customers' => User::has('orders', '>', 1)->count(),
            'repeat_customers' => User::has('orders', '>', 1)->count(),
            'one_time_buyers' => User::has('orders', '=', 1)->count(),
            
            // Products Performance
            'products_sold' => DB::table('order_items')
                ->join('orders', 'order_items.order_id', '=', 'orders.id')
                ->where('orders.status', 'completed')
                ->sum('order_items.quantity'),
            
            // Average metrics
            'avg_items_per_order' => DB::table('order_items')
                ->join('orders', 'order_items.order_id', '=', 'orders.id')
                ->where('orders.status', 'completed')
                ->selectRaw('AVG(order_items.quantity) as avg')
                ->value('avg') ?? 0,
            
            'avg_order_value' => Order::where('status', 'completed')->avg('total') ?? 0,
            'avg_orders_per_customer' => $usersWithPurchases > 0 
                ? round(Order::where('status', 'completed')->count() / $usersWithPurchases, 2)
                : 0,
            
            // User activity table data
            'user_activity' => $userActivity,
        ];

        return Inertia::render('Admin/Analytics', [
            'analytics' => $analytics
        ]);
    }
}
