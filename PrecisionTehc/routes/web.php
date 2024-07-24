<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TrackerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/diensten', function () {
    return view('diensten');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/AlgemeneVW', function () {
    return view('terms');
});

// Route::get('/products', [TrackerController::class, 'index']);


Route::get('/products', [TrackerController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [TrackerController::class, 'show'])->name('product.show');





Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart', [CartController::class, 'remove'])->name('cart.index');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');



// Routes for checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/proces', [CheckoutController::class, 'process'])->name('checkout.proces');

Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
Route::post('/checkout/webhook', [CheckoutController::class, 'webhook'])->name('checkout.webhook');




