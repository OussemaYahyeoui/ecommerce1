
<!doctype html>
<?php
include("functions/functions.php");
?>
<html lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>eCommerce HTML-5 Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <?php include("include/nav.php") ?>

<div class="slider-area ">

<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/2.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>product list</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="product_list section_padding">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="product_sidebar">
<div class="single_sedebar">

<form method="GET" action="results.php" >
<input type="text" name="user_query" placeholder="Search">
<div  class="search-icon">
<button name="search" type="submit"> <i class="fas fa-search special-tag"></i></button> 
<!--<i class="fas fa-search special-tag"></i>-->
</form>

</div>
</div>
<div class="single_sedebar">
<div class="select_option">
<div id="sidebar_title" class="select_option_list">Categories <i class="right fas fa-caret-down"></i> </div>
<div id="cats" class="select_option_dropdown">

<?php getCats(); ?>


</div>

</div>
</div>
</div>

<div class="single_sedebar">
<div class="select_option">
<div id="sidebar_title" class="select_option_list">genre <i class="right fas fa-caret-down"></i> </div>
<div id="cats" class="select_option_dropdown">

<?php getBrands(); ?>

</div>
</div>
</div>

</div>


<div class="col-md-8">
<div class="product_list">
<div class="row">


<?php
 
   if(isset($_GET['search'])){

    $search_query = $_GET['user_query'];

$get_pro = "SELECT * from products where product_title like '%$search_query%'";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
      
     $pro_id = $row_pro['product_id'];

     $pro_cat = $row_pro['product_cat'];

     $pro_brand = $row_pro['product_brand'];

     $pro_title = $row_pro['product_title'];

     $pro_price = $row_pro['product_price'];

     //$pro_desc = $row_pro['product_desc'];

     $pro_image = $row_pro['product_image'];

     //$pro_id = $row_pro['product_keywords'];

     echo "
          
             

                <div class='col-lg-6 col-sm-6'>
                <div class='single_product_item'>
                <img src='GYC/product_images/$pro_image' alt='' class='img-fluid' data-pagespeed-url-hash='878348367' onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                <h3> <a href='single-product.php?pro_id=$pro_id'>$pro_title</a> </h3>
                <p>$pro_price DT</p>
                <br>
                <a href='toutlesproduits.php?pro_id=$pro_id' class='btn hero-btn'>Shop Now</a>
                </div>
                </div>
     
     ";


    }
}
?>

              
        
         </div>
          
       </div>
</div>



</div>
</div>
<div class="load_more_btn text-center">
    <a href="#" class="btn_3">Load More</a>
</div>
</section>


<section class="client_review">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="client_review_slider owl-carousel">
<div class="single_client_review">
<div class="client_img">
<img src="assets/img/client1.png" alt="#" data-pagespeed-url-hash="504485946" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
<h5>- Micky Mouse</h5>
</div>
<div class="single_client_review">
<div class="client_img">
<img src="https://preview.colorlib.com/theme/estore/assets/img/xclient.png.pagespeed.ic.sqCeJjnkYH.webp" alt="#" data-pagespeed-url-hash="2216265824" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
<h5>- Micky Mouse</h5>
</div>
<div class="single_client_review">
<div class="client_img">
<img src="https://preview.colorlib.com/theme/estore/assets/img/xclient.png.pagespeed.ic.sqCeJjnkYH.webp" alt="#" data-pagespeed-url-hash="2510765745" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
<h5>- Micky Mouse</h5>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="shop-method-area section-padding30">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="ti-package"></i>
<h6>Free Shipping Method</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="ti-unlock"></i>
<h6>Secure Payment System</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-method mb-40">
<i class="ti-reload"></i>
<h6>Secure Payment System</h6>
<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
</div>
</div>
</div>
</div>
</div>


<section class="subscribe_part section_padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="subscribe_part_content">
<h2>Get promotions & updates!</h2>
<p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
<div class="subscribe_form">
<input type="email" placeholder="Enter your mail">
<a href="#" class="btn_1">Subscribe</a>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include("include/footer.php") ?>


<script src="assets/js/vendor1.js"></script>

<script src="assets/js/vendor2.js"></script>
<script src="assets/js/popper.js"></script><script>eval(mod_pagespeed_uLS_3jiC9P);</script>
<script>eval(mod_pagespeed_dEXX7W4Qj$);</script>

<script>eval(mod_pagespeed_fKzsIdr7CL);</script>

<script src="assets/js/owl.js"></script><script>eval(mod_pagespeed_t4vdyadhrM);</script>
<script>eval(mod_pagespeed_ZPIuHAdCMa);</script>

<script>eval(mod_pagespeed_PbZmGjTJEF);</script>
<script>eval(mod_pagespeed_QSDhf3cFEK);</script>
<script src="assets/js/jquery1.js"></script><script>eval(mod_pagespeed_nqEp4ru0AF);</script>

<script>eval(mod_pagespeed_UIGkZC$1YI);</script>
<script>eval(mod_pagespeed_1koFnvWiqU);</script>
<script>eval(mod_pagespeed_bh4Mt9M5Vq);</script>

<script>eval(mod_pagespeed_qCWqHbhHjW);</script>
<script>eval(mod_pagespeed_sO9pJ8Us7_);</script>
<script src="assets/js/jqueryvalidate.js"></script><script>eval(mod_pagespeed_xR93SgUb3P);</script>
<script>eval(mod_pagespeed_IwRW_1hrVc);</script>
<script>eval(mod_pagespeed_85KMyGu8r8);</script>

<script>eval(mod_pagespeed_gpcplEHVUP);</script>
<script>eval(mod_pagespeed_XKQAPPGbRm);</script>

<script src="assets/js/swiper.js"></script>

<script src="assets/js/mixitup.js"></script><script>eval(mod_pagespeed_UuL6sWdgQQ);</script>
<script>eval(mod_pagespeed_DLM$mMsF0G);</script>
<script src="assets/js/waypoints.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65467e75bbf4331f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>
</body>
</html>