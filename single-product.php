
<!doctype html>
<?php
include("functions/functions.php");
include("include/connexiondb.php");
?>
<html lang="zxx">
<head>
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
<?php include('include/nav.php') ?>

<div class="slider-area ">

<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/4.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Product details</h2>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="product_image_area">
<div class="container">
<div class="row justify-content-center">

<?php 
if(isset($_GET['pro_id'])){

  $product_id = $_GET['pro_id'];


$get_pro = "select * from products where product_id='$product_id'";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
      
     $pro_id = $row_pro['product_id'];

     $pro_title = $row_pro['product_title'];

     $pro_price = $row_pro['product_price'];

     $pro_image = $row_pro['product_image'];
      
     $pro_desc = $row_pro['product_desc'];

     echo "<div class='col-lg-12'>
                 <div class='product_img_slide owl-carousel'>
                  <img src='GYC/product_images/$pro_image'  width='400' height='300'>
                   <div class='col-lg-8'>
                     <div class='single_product_text text-center'>
                      <h3>$pro_title</h3>
                      </div>
                <p>$pro_price DT</p>
                <br>
                <p>$pro_desc</p>
                <div class='add_to_cart'><a href='#' class='btn_3'>add to cart</a>
                 </div>
                </div>
                </div>
                </div>";



}
}
?>

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

<?php include('include/footer.php') ?>


<script src="assets/js/vendor1.js"></script>

<script src="assets/js/vendor2.js"></script>
<script src="assets/js/popper.js"></script><script>eval(mod_pagespeed_uLS_3jiC9P);</script>
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
<script src="assets/js/waypoints.js"></script><script>eval(mod_pagespeed_xR93SgUb3P);</script>
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



<!--
 <div class="single_product_img">
    <img src="single_product.png.webp" alt="#" class="img-fluid" >
</div>
  <div class="single_product_img">
   <img src="single_product.png" alt="#" class="img-fluid" >
  </div>
<div class="single_product_img">
   <img src="single_product.png" alt="#" class="img-fluid" >
</div>
</div>
</div>
<div class="col-lg-8">
<div class="single_product_text text-center">
<h3>Foam filling cotton slow <br>
rebound pillows</h3>
<p>
Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.
</p>
<div class="card_area">
<div class="product_count_area">
<p>Quantity</p>
<div class="product_count d-inline-block">
<span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
<input class="product_count_item input-number" type="text" value="1" min="0" max="10">
<span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
</div>
<p>$5</p>
</div>

</div>
</div>
</div>
-->