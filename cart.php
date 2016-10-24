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
<link rel="stylesheet" href="css/cart.css"'.$level.'css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.css"'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="js/jquery_min.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
 ';
//サイトのタイトルを記入
$title = 'カート';
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

  <div class="boxA">
   <div class="cart">
    <div>
     <h3>カート</h3>
     <table>
      <tr>
       <td>aaaa</td>
       <td><a href="">商品名</a></td>
       <td>￥2,800</td>
       <td>2個</td>
       <td>￥5,600</td>
       <td>取消</td>
      </tr>

      <tr>
       <td></td>
       <td><a href="">商品名</a></td>
       <td>￥2,800</td>
       <td>2個</td>
       <td>￥5,600</td>
       <td>取消</td>
      </tr>
     </table>
    </div>
   </div>
   <div class="cash">
    <h3>レジに進む</h3>

   </div>
  </div>
 </article>
 <!--ここまででコンテントの内容終わる　-->
 <?php html_footer(); ?>
  </div>
  <!--wrap終了-->
  </body>

  </html>
