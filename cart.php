<!doctype html>
 <?php 
    session_start();
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

<div class="slider-area">
<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/2.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Panier</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="cart_area section_padding">
<form action="cart.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="cart_inner">
<div class="table-responsive">
<table class="table">
<thead>
<tr>

<th scope="col">Product</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>

<th scope="col">Remove</th>
</tr>

         <?php 
  
  $total = 0;
       
     global $con;

      $ip = getIp();

      $sel_price = "select * from cart where ip_add='$ip'";

      $run_price = mysqli_query($con, $sel_price);

      while($p_price=mysqli_fetch_array($run_price)) {

         $pro_id = $p_price ['p_id'];

         $pro_price = "select * from products , cart where product_id='$pro_id' and p_id='$pro_id'";

         $run_pro_price = mysqli_query($con, $pro_price);

         while($pp_price = mysqli_fetch_array($run_pro_price)){
                
              $product_price = array($pp_price['product_price']);
              
              $product_title = $pp_price['product_title'];
              
              $product_image = $pp_price['product_image'];

              $single_price = $pp_price['product_price'];

              $produit_qty = $pp_price['qty'];

              $values = array_sum($product_price);

              $total += $values;
  
         ?>



</thead>
<tbody>
      <tr>
      <td>
         <div class="media">
            <div class="d-flex">
               <img src="GYC/product_images/<?php echo $product_image; ?>" alt="" data-pagespeed-url-hash="1093754788" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
           </div>
       <div class="media-body">
           <p><?php echo $product_title; ?></p>
       </div>
          </div>
</td>
<td>
<h5><?php echo $single_price; ?></h5>
</td>
<td>
<div class="product_count">


<input class="input-number" type="text" name="qty" value=<?php echo $produit_qty ?>>
    
    <?php 
      
      
       if(isset($_POST['update_cart'])) {
         
         
          
           $qty = $_POST['qty'];

           $update_qty = "UPDATE cart set qty='$qty'";

           $run_qty = mysqli_query($con, $update_qty); 


           $_SESSION['qty']=$qty;

           
    
           $total = ($total*$qty); 
         

       }
     ?>
</div>
</td>
<td>
 <input  type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/>
</td>
<?php }} ?>
</tr>



<tr class="bottom_button">
<td>
     <input type="submit" class="btn_1" name="update_cart" value="Update Cart"/>
</td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<h5>Subtotal</h5>
</td>
<td>
<h5><?php echo $total;?></h5>
</td>
</tr>
<tr class="shipping_area">
<td></td>
<td></td>

</div>
</td>
</tr>
</tbody>
</table>
<div class="checkout_btn_inner float-right">
<input type="submit"  class="btn_1" name="continue" value="Continue Shopping"/>
<button><a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a></button>
</div>
</div>
</div>
</form>
</section>
  
     <?php 

       function updatecart(){

         global $con;
        
         $ip = getIp();
   
           if(isset($_POST['update_cart'])){
             
              foreach($_POST['remove'] as $remove_id) {

                 $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

                 $run_delete = mysqli_query($con, $delete_product);

                   if($run_delete){
     
                       echo "<script>window.open('cart.php','_self')</script>";
                       

                   }
                 
                  
                
              }
               

              

           }
            

           if(isset($_POST['continue'])) {
 
            echo "<script>window.open('index.php','_self')</script>";
             


           }
          
           echo @$up_cart = updatecart();
         
         }
     
     ?>





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