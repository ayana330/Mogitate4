<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
     return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/register', [ProductController::class, 'register']);

Route::get('/products/{productld}', [ProductController::class, 'show']);


Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::patch('/products/{produtld}/update', [ProductController::class, 'update']);

Route::get('/products/{productld}/delete', [ProductController::class, 'delete']);

