<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoutingController::class,'home'])->name('home');
Route::get('/product', [RoutingController::class,'product'])->name('product');
Route::get('/contact', [RoutingController::class,'contact'])->name('contact');


