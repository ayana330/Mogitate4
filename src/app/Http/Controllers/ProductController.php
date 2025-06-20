<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controllers
{
    public function index()
    {
        $products = Product::simplePaginate(6)
        return view('index', ['products' => $products]);
    }
}