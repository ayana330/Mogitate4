<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/store.css') }}" />

</head>

<body>
   <h1 class="header__logo">
        mogitate
      </h1>   
  <main>
   <div class="product-store__content">
     <div class="product-store__heading">
        <h2>商品登録</h2>
     </div>
   <form class="form" action="/products/store"></form>
   @csrf
    <section class="store__group">
      <p class="store__group-title">
        <span class="store__label--item">商品名</span>
          <span class="store__label--required">必須</span>
      </p>
        <div class="store__group-content">
          <div class="store__input--text">
            <input type="text" name="name" placeholder="商品名を入力">
          </div>
        </div>
        </section>
        <section class="store__group">
          <p class="store__group-title">
              <span class="store__label--item">値段</span>
              <span class="store__label--required">必須</span>
          </p>
        <div class="store__group-content">
          <div class="store__input--text">
            <input type="price" name="price" placeholder="値段を入力" >
          </div>
        </div>
        </section>
        <section class="store__group">
          <p class="store__group-title">
           <span class="store__label--item">商品画像</span>
           <span class="store__label--required">必須</span>
          </p>
        <div class="store__group-content">
          <div class="store__input--text">
            <input type="file" name="file" placeholder="ファイルを選択">
          </div>
        </div>
        </section>
        <section class="store__group">
          <p class="store__group-title">
            <span class="store__label--item">季節</span>
            <span class="store__label--required">必須</span>
            <span class="store__label--item">複数選択可</span>
          </p>
          <div class="store__group-content">
            <div class="store__input--text">
                <input type="radio" name="choices" value="春" />春
                <input type="radio" name="choices" value="夏" />夏
                <input type="radio" name="choices" value="秋" />秋
                <input type="radio" name="choices" value="冬" />冬
            </div>
          </div>
          </section>
          <section class="store__group">
          <p class="store__group-title">
            <span class="store__label--item">商品説明</span>
            <span class="store__label--required">必須</span>
          </p>
          <div class="store__group-content">
            <div class="store__input--textarea">
              <textarea name="textarea" placeholder="商品の説明を入力" cols="30" rows="10"></textarea> 
            </div>
          </div>
          </section>

          <div class="store__button">
            <button class="store__button-submit" type="submit">戻る</button>

            <button class="store__button-submit" type="submit">登録</button>
            <a href="/products/store"></a>

          </div>
</form>          
      </div>    
   </main>
</body>

</html>

