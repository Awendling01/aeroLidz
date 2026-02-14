<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $cartItems = [];
        $subtotal = 0;

        foreach ($cart as $id => $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $subtotal += $itemTotal;
            
            $cartItems[] = [
                'id' => $id,
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'image' => $item['image'],
                'total' => $itemTotal,
            ];
        }

        $shipping = $subtotal >= 100 ? 0 : 10;
        $tax = $subtotal * 0.08; // 8% tax - adjust based on your needs
        $total = $subtotal + $shipping + $tax;

        return Inertia::render('Cart', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'tax' => $tax,
            'total' => $total,
            'cartCount' => array_sum(array_column($cart, 'quantity')),
        ]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|string',
        ]);

        $cart = session('cart', []);
        $productId = $validated['id'];

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $validated['quantity'];
        } else {
            $cart[$productId] = [
                'name' => $validated['name'],
                'price' => $validated['price'],
                'quantity' => $validated['quantity'],
                'image' => $validated['image'],
            ];
        }

        session(['cart' => $cart]);
        $this->updateCartCount($cart);

        return back()->with('success', 'Item added to cart!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $cart = session('cart', []);

        if ($validated['quantity'] === 0) {
            unset($cart[$id]);
        } else {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $validated['quantity'];
            }
        }

        session(['cart' => $cart]);
        $this->updateCartCount($cart);

        return back()->with('success', 'Cart updated!');
    }

    public function remove($id)
    {
        $cart = session('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session(['cart' => $cart]);
        $this->updateCartCount($cart);

        return back()->with('success', 'Item removed from cart!');
    }

    public function clear()
    {
        session()->forget('cart');
        session(['cart_count' => 0]);

        return back()->with('success', 'Cart cleared!');
    }

    private function updateCartCount($cart)
    {
        $count = array_sum(array_column($cart, 'quantity'));
        session(['cart_count' => $count]);
    }
}
