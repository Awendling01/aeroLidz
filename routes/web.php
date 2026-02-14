<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// ==========================================
// PUBLIC ROUTES (Your Original AeroLidz Site)
// ==========================================

// Home & Content Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/how-to', [PageController::class, 'howTo'])->name('how-to');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/our-story', [PageController::class, 'ourStory'])->name('our-story');
Route::get('/rewards', [PageController::class, 'rewards'])->name('rewards');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/returns', [PageController::class, 'returns'])->name('returns');

// Products
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Shopping Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');

// ==========================================
// AUTHENTICATION ROUTES (Laravel Breeze)
// ==========================================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
