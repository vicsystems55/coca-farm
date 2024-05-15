<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about']);


Route::get('/services', [PageController::class, 'services']);


Route::get('/gallery', [PageController::class, 'gallery']);


Route::get('/contact-us', [PageController::class, 'contact']);

Route::post('/send-message', [ContactFormController::class, 'sendMessage']);






