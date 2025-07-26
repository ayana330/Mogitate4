<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;


use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        $products = Product::simplePaginate(15);
        return view('products', ['products' => $products]);
    }

    public function register()
    {
        return view('products.register');
    }

    public function store(ProductRequest $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|numeric|min:0',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'season' => 'required|array',
        //     // 'season.*' => 'in:春,夏,秋,冬',
        //     'description' => 'required|string',
        // ]);
        $validated = $request->validated();
        $request->file('image')->store('img','public');
        $image = $request->file('image')->getClientOriginalName();
        $product = new Product();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->image = $image;
        // $product->season = json_encode($validated['season']); // 配列を文字列化して保存
        $product->description = $validated['description'];
        $product->save();

        $data=[];
        foreach($validated['season'] as $season){
            $data[]=[
               'product_id' => $product->id,
               'season_id' => $season,
               'created_at' => now(),
               'updated_at' => now()

            ];
        }
        DB::table('product_season')->insert($data);

        return redirect('/products')->with('success', '商品を登録しました');
    }

        public function show($productId)
    {
        $product = Product::find($productId);
        return view('products.show', compact('product'));
    }

        public function update(ProductRequest $request)
    {
        $product = $request->only->all();
        unset($product['_token']);
        Product::find($request->id)->update($product);
        return view('products');
    }

        public function delete(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('products');
    }

        public function edit(ProductRequest $request)
    {
        $product = Product::find($request->id);
        return view('edit', ['form' => $product]);
    }

}