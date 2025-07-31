<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
     return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/register', [ProductController::class, 'register']);

Route::get('/products/{productId}', [ProductController::class, 'show']);


Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::patch('/products/{productId}/update', [ProductController::class, 'update']);

Route::post('/products/{productId}/delete', [ProductController::class, 'delete']);

