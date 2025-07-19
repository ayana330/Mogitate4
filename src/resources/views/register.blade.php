<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/products.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}" />

</head>

<body>
   <h1 class="header__logo">
        mogitate
      </h1>   
   <main>
     <div class="product-register__content">
        <div class="product-register__heading">
          <h2>商品登録</h2>
        </div>
@if (count($errors) > 0)
<p>入力に誤りがあります</p>
@endif
<form action="/products/store" method="post" enctype="multipart/form-data">
  @csrf
  @foreach ($products as $product)
     <h1>{{ $product->name }}</h1>
        <section class="register__group">
            <p class="register__group-title">
              <span class="register__label--item">商品名</span>
              <span class="register__label--required">必須</span>
            </p>
            <div class="register__group-content">
              <div class="register__input--text">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="商品名を入力">
              </div>
            </div>
            <div class="register__error-message">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </section>
        <section class="register__group">
          <p class="register__group-title">
              <span class="register__label--item">値段</span>
              <span class="register__label--required">必須</span>
          </p>
          <div class="register__group-content">
            <div class="register__input--text">
              <input type="number" name="price" value="{{ old('price') }}" placeholder="値段を入力" >
              </div>
              <div class="register__error">
              @error('price')
                 {{$errors->first('price')}}
              @enderror
              </div>
            </div>
        </section>
        <section class="register__group">
          <p class="register__group-title">
           <span class="register__label--item">商品画像</span>
           <span class="register__label--required">必須</span>
          </p>
          <div class="register__group-content">
            <div class="register__input--text">
              <input type="file" name="image">
            </div>
            <div class="register__error">
              @error('image')
                 {{ $message }}
              @enderror
            </div>
          </div>
        </section>
        <section class="register__group">
          <p class="register__group-title">
            <span class="register__label--item">季節</span>
            <span class="register__label--required">必須</span>
            <span class="register__label--item">複数選択可</span>
          </p>
          <div class="register__group-content">
            <div class="register__input--text">
                <input type="checkbox" name="season[]" value="1" />春
                <input type="checkbox" name="season[]" value="2" />夏
                <input type="checkbox" name="season[]" value="3" />秋
                <input type="checkbox" name="season[]" value="4" />冬
            </div>
            <div class="register__error">
              @error('season')
                 {{ $message }}
              @enderror
            </div>
          </div>
        </section>
        <section class="register__group">
          <p class="register__group-title">
            <span class="register__label--item">商品説明</span>
            <span class="register__label--required">必須</span>
          </p>
          <div class="register__group-content">
            <div class="register__input--textarea">
              <textarea name="description" placeholder="商品の説明を入力" cols="30" rows="10"></textarea> 
            </div>
            <div class="register__error">
              @error('description')
                {{ $message }}
              @enderror
            </div>
          </div>
        </section>

        <a href="{{ url()->previous() }}" class="register__button-submit">戻る</a>

        <button class="register__button-submit" type="submit">登録</button>
      @endforeach
      </form>          
      </div>    
   </main>
</body>
</html>