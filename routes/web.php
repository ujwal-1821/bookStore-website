<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('guest');

Route::get('about-us', function(){
    return view('aboutUs');
})->name('about');