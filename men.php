<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="css/common.css"'.$level.'css/style.css" type="text/css" />
<link rel="stylesheet" href="css/main.css"'.$level.'css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.css"'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="js/jquery_min.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
 ';
//サイトのタイトルを記入
$title = '-TOPページ-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';

/************
記入例
**************
//ファイルの回想を記入
$level = '../../';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />
        <link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';・・・内容がない場合はそのままにする

//サイトのタイトルを記入
$title = 'webサイト -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keyword = 'web,犬,単語';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'これはサイトの説明を表しています。';
//サイトの製作者を記入(表示には関係ない・任意)
$auther = 'IW32班';
*************
記入例終了
*************/

//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
?>

 <!--ここからコンテントの内容始まる　-->
 <article>
  <div id="slideshow">
   <img src="images/test1.jpg" alt="画像1" class="active">
   <img src="images/test2.jpg" alt="画像2">
   <img src="images/test3.jpg" alt="画像3">
   <img src="images/test4.jpg" alt="画像4">
   <img src="images/test5.jpg" alt="画像5">
  </div>
  </div>

  <div class="boxA">
   <div class="box3">
    <?php
  html_sidemenu();
  ?>
   </div>
   <div class="box4">
    <div class="box4_item1">
     <h3>新着アイテム</h3>
     <ul>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
     </ul>
     <a href="#" class="list">新着アイテム一覧へ>></a>
    </div>

    <div class="box4_item2">
     <h3>人気アイテムランキング</h3>
     <ul>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
     </ul>
     <a href="#" class="list">人気アイテムランキング一覧へ>></a>
    </div>
    <div class="box4_item3">
     <h3>セールアイテム</h3>
     <ul>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
      <li class="fade-in">
       <a href="#"><img src="images/sample.jpg" alt="">
        <div class="mask"><span class="caption">商品名<br>￥*,***</span></div>
       </a>
      </li>
     </ul>
     <a href="#" class="list">セールアイテム一覧へ>></a>
    </div>
   </div>
  </div>
 </article>
 <!--ここまででコンテントの内容終わる　-->
 <?php html_footer(); ?>
  </div>
  <!--wrap終了-->
  </body>

  </html>
