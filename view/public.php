<?php

function html_header(){
 global $level,$css,$js,$title,$keywords,$description,$author;

 echo'
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="keywords" content="'.$keywords.'">
  <meta name="description" content="'.$description.'">
  <meta name="robots" content="nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="'.$author.'">
  <title>'.$title.'</title>
  <link rel="stylesheet" href="'.$level.'css/reset.css" type="text/css" />
  <link rel="stylesheet" href="'.$level.'css/original.css" type="text/css" />
  '.$css.'
  <script type="text/javascript" src="'.$level.'js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="'.$level.'js/main.js"></script>
  '.$js.'
 </head>

<body>
 <div id="wrap">
 <div class="box1">
  <header><img src="#" alt="ロゴ">
   <nav class="h_nav">
    <ul>
     <li><a href="#"><i class="fa fa-lock"></i>ログイン</a></li>
     <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>会員登録</a></li>
     <li><a href="#"><i class="fa fa-envelope"></i>
 お問い合わせ</a></li>
     <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>カート</a></li>
    </ul>
   </nav>

  </header>
 </div>

 <div class="main_visual">
  <nav class="main_nav">
   <ul>
    <li id="fast"><a href="index.php">ALL</a></li>
    <li><a href="woman.php">WOMAN</a></li>
    <li><a href="men.php">MEN</a></li>
    <li><a href="category.php">CATEGORY</a></li>
    <li><a href="rank.php">RANKING</a></li>
   </ul>
  </nav>

 </header>

';}


function html_sidemenu(){
 global $level;

 echo'
    <h3>検索</h3>

    <form action="/" name="search1" method="post">
     <dl class="search1">
      <dt><input type="text" name="search" value="" placeholder="Search" /></dt>
      <dd>
       <button><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
      </dd>
     </dl>
    </form>

    <h3>カテゴリ</h3>
    <nav id="contents2 cfx">
     <ul id="category">
      <li class="textList_item "><a href="#">トップス</a>
       <ul class="item_list">
        <li><a href="#">Tシャツ</a></li>
        <li><a href="#">カットソー</a></li>
        <li><a href="#">シャツ</a></li>
        <li><a href="#">ブラウス</a></li>
        <li><a href="#">ニット</a></li>
        <li><a href="#">パーカ</a></li>
        <li><a href="#">スウェット</a></li>
        <li><a href="#">タンクトップ</a></li>
       </ul>
      </li>
      <li><a href="#">パンツ</a>
       <ul class="item_list">
        <li><a href="#">パンツ</a></li>
        <li><a href="#">ショートパンツ</a></li>
        <li><a href="#">デニム</a></li>
        <li><a href="#">チノパンツ</a></li>
        <li><a href="#">スキニーパンツ</a></li>
        <li><a href="#">レギンス</a></li>
       </ul>
      </li>
      <li><a href="#">スカート</a>
       <ul class="item_list">
        <li><a href="#">ミニスカート</a></li>
        <li><a href="#">ロングスカート</a></li>
        <li><a href="#">タイトスカート</a></li>
       </ul>
      </li>
      <li><a href="#">ワンピース</a>
       <ul class="item_list">
        <li><a href="#">ワンピース</a></li>
        <li><a href="#">シャツワンピ</a></li>
        <li><a href="#">デニムワンピ</a></li>
       </ul>
      </li>
      <li><a href="#">アウター</a></li>
      <li><a href="#">シューズ</a></li>
      <li><a href="#">バッグ</a></li>
      <li><a href="#">アクセサリ</a></li>
      <li><a href="#">帽子</a></li>
      <li><a href="#">財布</a></li>
      <li><a href="#">インナー</a></li>
      <li><a href="#">スーツ</a></li>
     </ul>
    </nav>
 ';}



function html_footer(){
 global $level;

 echo'
 <div class="footer">
  <footer>

   <div class="f_nav1 cfx">
    <ul>
     <li><a href="#">カテゴリ一覧</a></li>
     <li><a href="#">ランキング一覧</a></li>
     <li><a href="#">コーディネート一覧</a></li>
     <li><a href="#">トレンド一覧</a></li>
    </ul>
   </div>

   <div class="f_nav2 cfx">
    <ul>
     <li><a href="#">会社概要</a></li>
     <li><a href="#">採用情報</a></li>
     <li><a href="#">サイトマップ</a></li>
    </ul>
   </div>
   <p>Copyright&copy; 2016 IW13A167 ShimadaTomoyuki</p>
   </footer>
   </div>
';}

/******************************************
function html_nav(){
 global $level;

 echo'
 <nav>
       <ul>
         <li><a href="http://localhost:1024/original/"><img src="'.$level.'images/btn1.gif" width="180" height="40" alt="ナビ１"/></a></li>
            <li><a href="'.$level.'page2/"><img src="'.$level.'images/btn2.gif" width="180" height="40" alt="ナビ２"/></a></li>
            <li><a href="'.$level.'page3/"><img src="'.$level.'images/btn3.gif" width="180" height="40" alt="ナビ３"/></a></li>
            <li><a href="'.$level.'page4/"><img src="'.$level.'images/btn4.gif" width="180" height="40" alt="ナビ４"/></a></li>
            <li><a href="'.$level.'page5/"><img src="'.$level.'images/btn5.gif" width="180" height="40" alt="ナビ５"/></a></li>
        </ul>
    </nav>

';}
*******************************************/

?>
