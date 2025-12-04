<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('guest');



Route::get('about-us', function(){
    return view('aboutUs');
})->name('about');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('policy');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/shipping-info', function () {
    return view('shipping-info');
})->name('shipping');
Route::get('/return-policy', function () {
    return view('return-policy');
})->name('return');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
