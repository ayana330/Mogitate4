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
        return view('products.show', [
            'productId' => $product->id, 
            'product' => $product,
        ]);
    }

        public function edit($id)
        {
            $product = Product::findOrFail($id);
            return view('products.edit', compact('product'));
        }

        
        public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.show', $product->id)
                         ->with('success', '商品が更新されました。');
    
        // $product = $request->only(['content']);
        // Product::find($request->id)->update($product);
        // return view('/products')->with('message', '更新しました');
    }

        public function delete($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();

        return redirect('/products')->with('success','削除しました');
    }


}