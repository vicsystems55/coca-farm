<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about']);


Route::get('/services', [PageController::class, 'services']);


Route::get('/gallery', [PageController::class, 'gallery']);


Route::get('/contact-us', [PageController::class, 'contact']);



