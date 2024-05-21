<?php

use App\Livewire\ProductShow;
use App\Livewire\StoreFront;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', StoreFront::class);

Route::get('/product/{productId}', ProductShow::class)->name('product');

Route::get('/index', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
