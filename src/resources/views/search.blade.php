<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/search.css">

    <title>mogitate</title>
</head>
<body>
<h1 class="header__logo">
        mogitate
      </h1>

<header class="header">
  <div class="header__inner">
    <h2>商品一覧</h2>
  </div>    
</body>

<main class="container">
   <div class="flex">
     <aside>
       <form class="search-form" action="public/img" method="get">
         <div class="product__group-content">
           <div class="product__input--text">
              <input type="text" name="name" placeholder="商品名で検索" />
           </div>
          </div>
          <div class="product__button">
            <button class="product__button-submit" type="submit">検索</button>
            <a href="/products/search"></a>
          </div>
        </form>

        <h4 class="search-form__content-tittle">価格順で表示</h4>
        <form action="" method="">
        <select name="select" >
          <option value="">価格で並べ替え</option>
          <option value="高い順に表示">高い順に表示</option>
          <option value="低い順に表示">低い順に表示</option>
        </select>
        </form>
      </aside>

</html>