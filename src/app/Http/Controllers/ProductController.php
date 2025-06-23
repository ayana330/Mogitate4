<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controllers
{
    public function index()
    {
        $products = Product::simplePaginate(6);
        return view('index', ['products' => $products]);
    }
}