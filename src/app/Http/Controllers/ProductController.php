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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'season' => 'required|array',
            'season.*' => 'in:春,夏,秋,冬',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $product = new Product();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->image_path = $imagePath;
        $product->season = json_encode($validated['season']); // 配列を文字列化して保存
        $product->description = $validated['description'];
        $product->save();

        return redirect()->route('products.index')->with('success', '商品を登録しました');
    }

}