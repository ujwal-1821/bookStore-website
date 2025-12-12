<?php

use App\Http\Controllers\admin\testimonialController;
use Illuminate\Support\Facades\Route;


Route::resource('testimonial', testimonialController::class);