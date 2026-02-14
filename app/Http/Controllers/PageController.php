<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        
        // Fetch products from database
        $query = Product::where('active', true);
        
        // Filter by category
        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }
        
        // Search by name or description
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        $products = $query->orderBy('sort_order')
                         ->orderBy('featured', 'desc')
                         ->get()
                         ->map(function($product) {
                             return [
                                 'id' => $product->id,
                                 'name' => $product->name,
                                 'slug' => $product->slug,
                                 'price' => $product->price,
                                 'category' => $product->category,
                                 'badge' => $product->badge,
                                 'fromPrice' => $product->from_price,
                                 'featured' => $product->featured,
                                 'inStock' => $product->in_stock,
                                 'rating' => $product->rating,
                                 'reviewCount' => $product->review_count,
                                 'image' => $product->images[0] ?? '/images/products/placeholder.jpg',
                             ];
                         });
        
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
}
