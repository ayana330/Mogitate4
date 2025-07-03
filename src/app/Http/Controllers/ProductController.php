<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();
        $products = Product::simplePaginate(6);
        return view('products', ['products' => $products]);
    }

    public function register()
    {
        return view('register');
    }
}