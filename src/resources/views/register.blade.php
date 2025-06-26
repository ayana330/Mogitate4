<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/products.css') }}"/>

</head>

<body>
   <header class="header">
     <div class="header__inner">
       <a class="header__logo" href="/">
         mogitate
       </a>
     </div>
   </header>
   
   <main>
     <div class="product-register__content">
        <div class="product-register__heading">
          <h2>商品登録</h2>
        </div>
        <register class="register">
          <div class="register__group">
            <div class="register__group-title">
              <span class="register__label--item">商品名</span>
              <span class="register__label--required">必須</span>
            </div>
            <div class="register__group-content">
              <div class="register__input--text">
                <input type="text" name="name" placeholder="商品名を入力">
              </div>
              <div class="register__error"></div>
                <!--バリデーション機能を実装したら記述します。  -->
              </div>
            </div>
        </div>
          <div class="register__group">
            <div class="register__group-title">
              <span class="register__label--item">値段</span>
              <span class="register__label--required">必須</span>
            </div>
            <div class="register__group-content">
              <div class="register__input--text">
                <input type="price" name="price" placeholder="値段を入力" >
              </div>
              <div class="register__error"></div>
                <!--バリデーション機能を実装したら記述します。  -->
              </div>
            </div>
          </div>
          <div class="register__group">
            <div class="register__group-title">
              <span class="register__label--item">商品画像</span>
              <span class="register__label--required">必須</span>
            </div>
          </div>
          <div class="register__group-content">
            <div class="register__input--text">
              <input type="file" name="file" placeholder="ファイルを選択">
            </div>
          </div>

          <div class="register__group">
            <div class="register__group-title">
              <span class="register__label--item">季節</span>
              <span class="register__label--required">必須</span>
              <span class="register__label--item">複数選択可</span>
            </div>
            <div class="register__group-content">
              <div class="register__input--text">
                <input type="radio" value="春">
                <input type="radio" value="夏">
                <input type="radio" value="秋">
                <input type="radio" value="冬">
              </div>
            </div>
            <div class="register__group">
              <div class="register__group-title">
                <span class="register__label--item">商品説明</span>
                <span class="register__label--required">必須</span>
              </div>
              <div class="register__group-content">
                <div class="register__input--textarea">
                  <textarea name="textarea" id="商品の説明を入力" cols="30" rows="10"></textarea> 
                </div>
              </div>
            </div>
          </div>
          <div class="register__button">
            <button class="register__button-submit" type="submit">戻る</button>

            <button class="register__button-submit" type="submit">送信</button>
          </div>
   </main>
</body>
</html>