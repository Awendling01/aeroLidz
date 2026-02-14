<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show($id)
    {
        // TODO: Replace with actual database query
        $product = $this->getProduct($id);

        if (!$product) {
            abort(404);
        }

        return Inertia::render('ProductDetail', [
            'product' => $product,
            'cartCount' => session('cart_count', 0),
        ]);
    }

    /**
     * Temporary method to get a single product - replace with database query
     */
    private function getProduct($id)
    {
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Light Bar Cover | Dual Row 52"',
                'price' => 175.00,
                'description' => 'The AeroLidz light bar cover eliminates wind noise and protects your light bar from road debris. Made from high-grade UV polycarbonate for maximum durability.',
                'features' => [
                    'Eliminates wind noise',
                    'High-grade UV polycarbonate',
                    'No-tool installation',
                    'Fits 50"-52" dual row bars',
                    '30-day money-back guarantee',
                ],
                'images' => [
                    '/images/products/cover-dual-52-1.jpg',
                    '/images/products/cover-dual-52-2.jpg',
                    '/images/products/cover-dual-52-3.jpg',
                    '/images/products/cover-dual-52-4.jpg',
                    '/images/products/cover-dual-52-5.jpg',
                ],
                'category' => 'covers',
                'badge' => 'Best Seller',
                'inStock' => true,
                'rating' => 4.8,
                'reviewCount' => 411,
            ],
            2 => [
                'id' => 2,
                'name' => 'RGB Light Bar | Dual Row 52"',
                'price' => 500.00,
                'description' => 'Premium RGB light bar with full color spectrum control. Built with high-quality LEDs for maximum brightness and durability.',
                'features' => [
                    'Full RGB color control',
                    'Bluetooth app control',
                    'High-intensity LEDs',
                    'Weather-resistant housing',
                    'Easy mounting system',
                ],
                'images' => [
                    '/images/products/rgb-light-bar-1.jpg',
                    '/images/products/rgb-light-bar-2.jpg',
                    '/images/products/rgb-light-bar-3.jpg',
                ],
                'category' => 'light-bars',
                'badge' => null,
                'inStock' => true,
                'rating' => 4.9,
                'reviewCount' => 156,
            ],
            3 => [
                'id' => 3,
                'name' => 'Graphic InsertZ | Subscription Box',
                'price' => 30.00,
                'description' => 'Get exclusive new designs delivered every month. Choose your tier and receive themed graphics like Sport, Sahara, or Rubicon.',
                'features' => [
                    'Monthly exclusive designs',
                    'UV-resistant material',
                    'Easy to install',
                    'Multiple tier options',
                    'Cancel anytime',
                ],
                'images' => [
                    '/images/inserts/subscription-box.jpg',
                ],
                'category' => 'subscription',
                'badge' => 'Monthly',
                'fromPrice' => true,
                'inStock' => true,
                'rating' => 4.7,
                'reviewCount' => 89,
            ],
        ];

        return $products[$id] ?? null;
    }
}
