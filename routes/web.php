<?php

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
