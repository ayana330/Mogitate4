<!-- resources/views/products/edit.blade.php -->
<h1>商品編集</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- HTTPメソッドの指定 -->

    <label>商品名</label>
    <input type="text" name="name" value="{{ old('name', $product->name) }}">

    <label>説明</label>
    <textarea name="description">{{ old('description', $product->description) }}</textarea>

    <label>価格</label>
    <input type="number" name="price" value="{{ old('price', $product->price) }}">

    <button type="submit">更新</button>
</form>