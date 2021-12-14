

<?php
session_start();
include("functions/functions.php");
include("include/connexiondb.php");

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <!-- font script -->
<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
<link href="font/css/all.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>eCommerce HTML-5 Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="https://preview.colorlib.com/theme/estore/site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="https://preview.colorlib.com/theme/estore/assets/img/favicon.ico">
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  

<div class="header-top top-bg d-none d-lg-block">

<div class="container-fluid">

<div class="col-xl-12">
<div class="row d-flex justify-content-between align-items-center">
<div class="header-info-left d-flex">
<div class="flag">

<img src="assets/img/tunisia.png" alt="">
</div>

<ul class="contact-now">
<li style="color:white;">+216 53 133 566</li>
</ul>
</div>
<div id="shopping_cart" style="float:right; font-size:18px; padding:5px; line-height:40px;color:white;" >

<span> 
   <?php 
      
      if(isset($_SESSION['customer_email'])){
   
         echo"Welcome!" . $_SESSION['customer_email'] . "<b></b>";
          
         }

      else{

         echo"Welcome!";

      }

     ?> 
Total Items: <?php total_items(); ?> - Total price: <?php total_price(); ?>
<?php 
  //if(!isset($_SESSION['customer_email'])){
    //echo "<a href='checkout.php'>Login</a>";

  //}
//else {
  //echo "<a href='logout.php>Logout</a>";
//}
?>
</span>
</div>
</div>
</div>
</div>
</div>
<?php include("include/nav.php") ?> 




<main>


<div  class="slider-area ">

<div  class="slider-active">
<div style="background-color: aqua;"  class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
<div class="container">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
<div class="hero__img" data-animation="bounceIn" data-delay=".4s">
<img  style="margin-bottom: 35px;" src="assets/img/1.png" alt="">
</div>
</div>
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
<div class="hero__caption">
<span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
<h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
<p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2021!</p>

<div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
<a href="toutlesproduits.php" class="btn hero-btn">Shop Now</a>
</div>
</div>
</div>
</div>
</div>
</div>




<section class="category-area section-padding30">
<div class="container-fluid">

<div class="row">
<div class="col-lg-12">
<div class="section-tittle text-center mb-85">
<h2>Shop by Category</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-6">
<div class="single-category mb-30">
<div class="category-img">
<img src="assets/img/2.jpg" alt="">
<div class="category-caption">
<h2>Women`s</h2>
<span class="best"><a href="#">Best New Deals</a></span>
<span class="collection">New Collection</span>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6">
<div class="single-category mb-30">
<div class="category-img text-center">
<img src="assets/img/3.jpg" alt="">
<div class="category-caption">
<span class="collection">Discount!</span>
<h2>Winter Cloth</h2>
<p>New Collection</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6">
<div class="single-category mb-30">
<div class="category-img">
<img src="assets/img/4.jpg" alt="">
<div class="category-caption">
<h2>Man`s Cloth</h2>
<span class="best"><a href="#">Best New Deals</a></span>
<span class="collection">New Collection</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="latest-product-area padding-bottom">
<div class="container">
<div class="row product-btn d-flex justify-content-end align-items-end">

<div class="col-xl-4 col-lg-5 col-md-5">
<div class="section-tittle mb-30">
<h2>Latest Products</h2>
</div>
</div>
<div class="col-xl-8 col-lg-7 col-md-7">
<div class="properties__button f-right">

<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
<!--
<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
<a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>-->
</div>
</nav>

</div>
</div>
</div>

<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<div class="row">


<?php getPromax(); ?>






<div style="background-color: burlywood;"     class="best-product-area lf-padding">
<div class="product-wrapper bg-height" >
<div class="container position-relative">
<div class="row justify-content-between align-items-end">
<div class="product-man position-absolute  d-none d-lg-block">
<img src="assets/img/11.png" alt="">
</div>
<div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
<div class="vertical-text">
<span>Manz</span>
</div>
</div>
<div class="col-xl-8 col-lg-8">
<div class="best-product-caption">
<h2>Find The Best Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br> from Our Shop</h2>
<p>Designers who are interesten creating state ofthe.</p>
<a href="#" class="black-btn">Shop Now</a>
</div>
</div>
</div>
</div>
</div>

<div class="shape bounce-animate d-none d-md-block">
<img src="assets/img/12.png" alt="">
</div>
</div>


<div class="best-collection-area section-padding2">
<div class="container">
<div class="row d-flex justify-content-between align-items-end">

<div class="col-xl-4 col-lg-4 col-md-6">
<div class="best-left-cap">
<h2>Best Collection of This Month</h2>
<p>Designers who are interesten crea.</p>
<a href="#" class="btn shop1-btn">Shop Now</a>
</div>
<div class="best-left-img mb-30 d-none d-sm-block">
<img src="assets/img/13.png" alt="">
</div>
</div>

<div class="col-xl-2 col-lg-2 d-none d-lg-block">
<div class="best-mid-img mb-30 ">
<img src="assets/img/14.png" alt="">
</div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6">
<div class="best-right-cap ">
<div class="best-single mb-30">
<div class="single-cap">
<h4>Menz Winter<br> Jacket</h4>
</div>
<div class="single-img">
<img src="assets/img/15.png" alt="">
</div>
</div>
</div>
<div class="best-right-cap">
<div class="best-single mb-30">
<div class="single-cap active">
<h4>Menz Winter<br>Jacket</h4>
</div>
<div class="single-img">
<img src="assets/img/16.png" alt="">
</div>
</div>
</div>
<div class="best-right-cap">
<div class="best-single mb-30">
<div class="single-cap">
<h4>Menz Winter<br> Jacket</h4>
</div>
<div class="single-img">
<img src="assets/img/17.png" alt="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div style="background-color: cyan;"  class="latest-wrapper lf-padding">
<div  class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
<div  class="container">
<div  class="row d-flex align-items-center">
<div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
<div class="latest-caption">
<h2>Get Our<br>Latest Offers News</h2>
<p>Subscribe news latter</p>
</div>
</div>
<div class="col-xl-5 col-lg-5 col-md-6 ">
<div class="latest-subscribe">
<form action="#">
<input type="email" placeholder="Your email here">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button>Shop Now</button>
</form>
</div>
</div>
</div>
</div>

<div class="man-shape">
<img src="" alt="">
</div>
</div>
</div>


<div class="shop-method-area section-padding30">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="fas fa-shipping-fast"></i>
<h6>Free Shipping Method</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="fas fa-lock-open"></i>
<h6>Secure Payment System</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="fas fa-lock-open"></i>
<h6>Secure Payment System</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
</div>
</div>
</div>


<div class="gallery-wrapper lf-padding">
<div class="gallery-area">
<div class="container-fluid">
<div class="row">
<div class="gallery-items">
<img src="assets/img/18.jpg" alt="">
</div>
<div class="gallery-items">
<img src="assets/img/19.jpg" alt="">
</div>
<div class="gallery-items">
<img src="assets/img/20.jpg" alt="">
</div>
<div class="gallery-items">
<img src="assets/img/21.jpg" alt="">
</div>
<div class="gallery-items">
<img src="assets/img/" alt="">
</div>
</div>
</div>
</div>
</div>

</main>

<?php include("include/footer.php") ?> 



<script src="https://preview.colorlib.com/theme/estore/assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="https://preview.colorlib.com/theme/estore/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://preview.colorlib.com/theme/estore/assets/js/popper.min.js+bootstrap.min.js+jquery.slicknav.min.js.pagespeed.jc.tZyD-FwHec.js"></script><script>eval(mod_pagespeed_uLS_3jiC9P);</script>
<script>eval(mod_pagespeed_dEXX7W4Qj$);</script>

<script>eval(mod_pagespeed_fKzsIdr7CL);</script>

<!--<script src="https://preview.colorlib.com/theme/estore/assets/js/owl.carousel.min.js+slick.min.js+wow.min.js+animated.headline.js.pagespeed.jc.wJ9RpF0nwF.js"></script>-->
<script>eval(mod_pagespeed_ZPIuHAdCMa);</script>
<script>eval(mod_pagespeed_t4vdyadhrM);</script>

<script>eval(mod_pagespeed_PbZmGjTJEF);</script>
<script>eval(mod_pagespeed_QSDhf3cFEK);</script>
<script src="https://preview.colorlib.com/theme/estore/assets/js/jquery.magnific-popup.js+jquery.scrollUp.min.js+jquery.nice-select.min.js+jquery.sticky.js+contact.js+jquery.form.js.pagespeed.jc.lAaetcuKu4.js"></script><script>eval(mod_pagespeed_nqEp4ru0AF);</script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ti-arrow-up"></i></a>
<script>eval(mod_pagespeed_UIGkZC$1YI);</script>
<script>eval(mod_pagespeed_1koFnvWiqU);</script>
<script>eval(mod_pagespeed_bh4Mt9M5Vq);</script>

<script>eval(mod_pagespeed_qCWqHbhHjW);</script>
<script>eval(mod_pagespeed_sO9pJ8Us7_);</script>
<script src="https://preview.colorlib.com/theme/estore/assets/js/jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.X9c6Ii-Aij.js"></script><script>eval(mod_pagespeed_xR93SgUb3P);</script>
<script>eval(mod_pagespeed_IwRW_1hrVc);</script>
<script>eval(mod_pagespeed_85KMyGu8r8);</script>

<script>eval(mod_pagespeed_gpcplEHVUP);</script>
<script>eval(mod_pagespeed_XKQAPPGbRm);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6532ed84ef45048b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>
</body>
</html>