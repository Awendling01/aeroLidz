<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return Inertia::render('ProductDetail', [
            'product' => [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price' => $product->price,
                'category' => $product->category,
                'inStock' => $product->in_stock,
                'featured' => $product->featured,
                'badge' => $product->badge,
                'fromPrice' => $product->from_price,
                'rating' => $product->rating,
                'reviewCount' => $product->review_count,
                'features' => $product->features,
                'images' => $product->images,
                'specifications' => $product->specifications,
            ],
            'cartCount' => session('cart_count', 0),
        ]);
    }
}
