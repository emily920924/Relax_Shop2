<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Relax_Shop</title>
  <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="js/bxslider/jquery.bxslider.css">
  <link rel="stylesheet" href="js/flexslider/flexslider.css">

  <style>
    .flex-control-nav {
      width:80%;
      top:860px;
    }
  </style>

</head>
<script>
$(function(){

$(window).load(function(){
  $('.flexslider').flexslider({
        animation: "slide"
      });

    });
  });
</script>

<body>
<header id="Header">
  <div class="Container">
    <div id="MenuIcon" class="BGEdit"><a class="DB" href="#"><span class="SrOnly">手機版主導覽按鈕</span></a></div>
    <h1 id="Logo" class="BGEdit"><a class="DB" href="index.php"><span class="SrOnly">Relax_Shop</span></a> </h1>
    <h2 class="SrOnly">讓妳走在時尚流行前端</h2>
    <!-- 會員相關區塊 start-->
    <div id="MemberContent">
      <div id="MemberIcon" class="BGEdit"><a href="#" class="DB"><span class="SrOnly">會員登入</span><i class="fa fa-user" aria-hidden="true"></i></a></div>
      <div id="CartIcon" class="BGEdit"><a href="#" class="DB"><span class="SrOnly">購物籃</span><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></div>
    </div>
    <!-- 會員相關區塊 end-->
    <h3 class="SrOnly">主導覽</h3>
    <nav id="PrimaryNavigation" class="switch">
      <ul>
        <li id="AboutBtn"><a href="#" class="DB"><span>關於我們</span></a></li>
        <li id="NewBtn"><a href="#" class="DB"><span>最新動態</span></a></li>
        <li id="PopularBtn"><a href="#" class="DB"><span>人氣商品</span></a></li>
        <li id="SalesBtn"><a href="#" class="DB"><span>熱銷排行</span></a></li>
      </ul>
    </nav>
  </div>
</header>
<div id="Banner">
  <div id="BannerLeft"><img src="" alt=""></div> <!-- ..Banner轉動背景圖左邊.. -->
  <div id="BannerContent">
    <ul class="bxslider">
          <li>
            <img src="uploads/banner/banner1.jpg" />
          </li>
          <li>
            <img src="uploads/banner/banner2.jpg" />
          </li>
          <li>
            <img src="uploads/banner/banner3.jpg" />
          </li>
          <li>
            <img src="uploads/banner/banner4.jpg" />
          </li>
        </ul>
  </div>
  <div id="BannerRight"><img src="" alt=""></div> <!-- ..Banner轉動背景圖右邊.. -->

</div>

<div id="News">
  <div class="Container">
    <h4>最新動態</h4>
    <!-- 新聞區塊 start-->
    <div class="NewContent">
      <div class="Wrap">
        <img src="uploads/news/news_01.jpg" alt="" class="NewsImg">
        <p class="NewsDate">2016/08/15</p>
        <p class="NewsTitle"><a href="#">本期新品→五折</a></p>
    </div></div>
    <!-- 新聞區塊 end-->
    <!-- 新聞區塊 start-->
    <div class="NewContent">
      <div class="Wrap">
         <img src="uploads/news/news_02.jpg" alt="" class="NewsImg">
         <p class="NewsDate">2016/08/01</p>
         <p class="NewsTitle"><a href="#">前期新品→99up</a></p>
    </div>
    </div>
    <!-- 新聞區塊 end-->
    <!-- 新聞區塊 start-->
    <div class="NewContent">
      <div class="Wrap">
         <img src="uploads/news/news_03.jpg" alt="" class="NewsImg">
         <p class="NewsDate">2016/08/18</p>
         <p class="NewsTitle"><a href="#">新品上市-韓妞推薦→五折</a></p>
    </div></div>
    <!-- 新聞區塊 end-->
  </div>
</div>
<div id="Popular" class="Container">
  <h4 class="SrOnly">商品介紹</h4>
  <!-- 商品區塊 start-->
  <div class="PCContent">
    <div class="PCImgContent"><img src="uploads/product_category/product_category_01.jpg" alt=""></div>
    <div class="PCDecription"><p>上衣→短袖五分袖</p></div>
  </div>
  <!-- 商品區塊 end-->
  <!-- 商品區塊 start-->
  <div class="PCContent">
    <div class="PCImgContent PCImgRight"><img src="uploads/product_category/product_category_02.jpg" alt=""></div>
    <div class="PCDecription"><p>褲類→吊帶褲</p></div>
  </div>
  <!-- 商品區塊 end-->
  <!-- 商品區塊 start-->
  <div class="PCContent">
    <div class="PCImgContent"><img src="uploads/product_category/product_category_03.jpg" alt=""></div>
    <div class="PCDecription"><p>內衣→背心小可愛</p></div>
  </div>
  <!-- 商品區塊 end-->
</div>
<div id="Taster">
  <div class="Container">
    <h4>穿搭技巧</h4>
    <!-- 秘訣區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <img src="images/taste/taste_01.jpg" alt="" class="NewsImg">
        <div class="TipTag"></div>
        <p>讓妳走在時尚流行前端</p>
      </div>
    </div>
    <!-- 秘訣區塊 end-->
    <!-- 秘訣區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <img class="NewsImg" src="images/taste/taste_02.jpg" alt="" >
        <div class="TipTag"></div>
        <p>讓妳走在時尚流行前端</p>
      </div>
    </div>
    <!-- 秘訣區塊 end-->
    <!-- 秘訣區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <img src="images/taste/taste_03.jpg" alt="" class="NewsImg">
        <div class="TipTag"></div>
        <p>讓妳走在時尚流行前端</p>
      </div>
    </div>
    <!-- 秘訣區塊 end-->
  </div>
</div>
<div id="Map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d452.16779237784715!2d121.22523310024728!3d24.954464693700903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56fe04cf73ed3e8c!2sCACO!5e0!3m2!1szh-TW!2stw!4v1472546472445" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- 頁尾 -->
<footer id="Footer">
  <div class="Container">
    <div id="ContactContent">
      <div id="FooterLogo"><a href="index.php">Relax_Shop</a></div>
      <p>桃園市中壢區中平路23號</p>
      <p>聯絡專線:0800-123-456</p>
    </div>
    <div id="SocietyContent">
      <div id="FacebookIcon"><a href="" class="DB"><span class="SrOnly">Fcebook</span><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
      <div id="GooglePlus"><a href="" class="DB"><span class="SrOnly">Google+</span><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></div>
    </div>
  </div>
  <div id="Copyrights"><p>Copyright © 2016 Relax_Shop. All Rights Reserved.</p></div>
</footer>
<div id="PageTop"><a class="DB" href="javascript:void(0)">^<span class="SrOnly">回到上方</span></a></div>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bxslider/jquery.bxslider.js"></script>
<script src="js/script.js"></script>
</body>
</html>
