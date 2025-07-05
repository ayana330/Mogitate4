<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        $products = Product::simplePaginate(6);
        return view('products', ['products' => $products]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // $product = new Product();
        $product =$request->only(['name', 'price', 'image', 'season', 'description']);

        return redirect('/products');
    }

}