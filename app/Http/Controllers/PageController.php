<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        return Inertia::render('Home', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function shop(Request $request)
    {
        $category = $request->get('category', 'all');
        $search = $request->get('search', '');
        
        // TODO: Replace with actual product fetching from database
        $products = $this->getProducts($category, $search);
        
        return Inertia::render('Shop', [
            'products' => $products,
            'activeCategory' => $category,
            'searchQuery' => $search,
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function howTo()
    {
        return Inertia::render('HowTo', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function faq()
    {
        return Inertia::render('Faq', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function ourStory()
    {
        return Inertia::render('OurStory', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function rewards()
    {
        return Inertia::render('Rewards', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function reviews()
    {
        return Inertia::render('Reviews', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    public function returns()
    {
        return Inertia::render('Returns', [
            'cartCount' => session('cart_count', 0),
        ]);
    }

    /**
     * Temporary method to get products - replace with database queries
     */
    private function getProducts($category, $search)
    {
        // Mock product data - this should come from your database
        $allProducts = [
            [
                'id' => 1,
                'name' => 'Light Bar Cover | Dual Row 52"',
                'price' => 175.00,
                'image' => '/images/products/cover-dual-52.jpg',
                'category' => 'covers',
                'badge' => 'Best Seller',
                'inStock' => true,
            ],
            [
                'id' => 2,
                'name' => 'RGB Light Bar | Dual Row 52"',
                'price' => 500.00,
                'image' => '/images/products/rgb-light-bar.jpg',
                'category' => 'light-bars',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 3,
                'name' => 'Graphic InsertZ | Subscription Box',
                'price' => 30.00,
                'image' => '/images/inserts/subscription-box.jpg',
                'category' => 'subscription',
                'badge' => 'Monthly',
                'fromPrice' => true,
                'inStock' => true,
            ],
            [
                'id' => 4,
                'name' => 'RGB LED Light Pods (3")',
                'price' => 125.00,
                'image' => '/images/products/led-pods.jpg',
                'category' => 'light-bars',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 5,
                'name' => 'Light Bar Control Module',
                'price' => 70.00,
                'image' => '/images/products/control-module.jpg',
                'category' => 'accessories',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 6,
                'name' => 'Bluetooth & Remote Controller',
                'price' => 100.00,
                'image' => '/images/products/bt-controller.jpg',
                'category' => 'accessories',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 7,
                'name' => 'JL/JT 50/52" Upper Bar Brackets',
                'price' => 500.00,
                'image' => '/images/products/brackets.jpg',
                'category' => 'accessories',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 8,
                'name' => 'Graphic InsertZ | But Did You Die?',
                'price' => 45.00,
                'image' => '/images/inserts/but-did-you-die.jpg',
                'category' => 'graphic',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 9,
                'name' => 'Graphic InsertZ | American Flag',
                'price' => 45.00,
                'image' => '/images/inserts/american-flag.jpg',
                'category' => 'graphic',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 10,
                'name' => 'Graphic InsertZ | Wrangler',
                'price' => 45.00,
                'image' => '/images/inserts/wrangler.jpg',
                'category' => 'graphic',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 11,
                'name' => 'Graphic InsertZ | Mardi Gras',
                'price' => 45.00,
                'image' => '/images/inserts/mardi-gras.jpg',
                'category' => 'graphic',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 12,
                'name' => 'LED Remote Controller',
                'price' => 25.00,
                'image' => '/images/products/remote-controller.jpg',
                'category' => 'accessories',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 13,
                'name' => 'Complete Light Bar Kit',
                'price' => 650.00,
                'image' => '/images/products/complete-kit.jpg',
                'category' => 'light-bars',
                'badge' => 'Bundle',
                'inStock' => true,
            ],
            [
                'id' => 14,
                'name' => 'Custom InsertZ | Dual Row 52"',
                'price' => 85.00,
                'image' => '/images/inserts/custom-insert.jpg',
                'category' => 'custom',
                'badge' => null,
                'inStock' => true,
            ],
            [
                'id' => 15,
                'name' => 'Graphic InsertZ | 3D Skeleton',
                'price' => 45.00,
                'image' => '/images/inserts/3d-skeleton.jpg',
                'category' => 'graphic',
                'badge' => null,
                'inStock' => true,
            ],
        ];

        // Filter by category
        if ($category !== 'all') {
            $allProducts = array_filter($allProducts, function($product) use ($category) {
                return $product['category'] === $category;
            });
        }

        // Filter by search
        if ($search) {
            $allProducts = array_filter($allProducts, function($product) use ($search) {
                return stripos($product['name'], $search) !== false;
            });
        }

        return array_values($allProducts);
    }
}
