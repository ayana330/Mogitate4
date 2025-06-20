<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        mogitate
      </a>
    </div>
  </header>
  <main>
  <div class="flex">
   <div class="search-form__content">
    <h2 class="search-form__content-title">商品一覧</h2>
   </div>
   <form class="search-form" action="public/img" method="get"></form>
    <div class="product__group-content">
      <div class="product__input--text">
        <input type="text" name="name" placeholder="商品名で検索" />
      </div>
    </div>
    <div class="product__button">
      <button class="product__button-submit" type="submit">検索</button>
    </div>
    <h4 class="search-form__content-tittle">価格順で表示</h4>
    <form action="" method=""></form>
      <select name="select">
        <option value="高い順に表示">高い順に表示</option>
        <option value="低い順に表示">低い順に表示</option>
      </select>
      
   <div class="flex__item">
    <div class="practice__card">
      <div class="fruit__img">
        <img src="/storage/img/kiwi.png" alt="kiwi">
      </div>
      <div class="card__ttl">
        キウイ ￥800
      </div>
      <div class="fruit__img">
        <img src="/storage/img/strawberry.png" alt="strawberry">
      <div class="card__ttl">
        ストロベリー  ￥1200
      </div>
      <div class="fruit__img">
        <img src="/storage/img/orange.png" alt="orange">
      <div class="card__ttl">
        オレンジ  ￥850
      </div>
      <div class="fruit__img">
        <img src="/storage/img/watermelon.png" alt="watermelon">
      <div class="card__ttl">
        スイカ  ￥700
      </div>
      <div class="fruit__img">
        <img src="/storage/img/peach.png" alt="peach">
      <div class="card__ttl">
        ピーチ  ￥1000
      </div>
      <div class="fruit__img">
        <img src="/storage/img/muscat.png" alt="muscat">
      <div class="card__ttl">
        シャインマスカット  ￥1400
      </div>
      <div class="fruit__img">
        <img src="/storage/img/banana.png" alt="banana">
        バナナ  ￥600
      </div>
      <div class="fruit__img">
        <img src="/storage/img/grapes.png" alt="grapes">
        ぶどう  ￥1100
      </div>
      <div class="fruit__img">
        <img src="/storage/img/melon.png" alt="melon">
        メロン  ￥900
      </div>
      <div class="fruit__img">
        <img src="/storage/img/pineapple.png" alt="pineapple">
        パイナップル  ￥800
      </div>
    </div>
</div>
</body>
</html>