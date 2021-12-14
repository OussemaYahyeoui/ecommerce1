<!doctype html>
<?php 

session_start();

?>
<html class="no-js" lang="zxx">
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
</head>
<body>

<?php include("include/nav.php") ?>
<?php include("include/connexiondb.php")?>
<?php include("functions/functions.php") ?>

<div class="slider-area ">

<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/2.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Inscription</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="login_part section_padding ">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<div class="login_part_text text-center">
<div class="login_part_text_iner">
<h2>Already have an account?</h2>
<p>Products are made every day in Our store, and a good example is the</p>
<a href="login.php" class="btn_3">Connexion</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="login_part_form">
<div class="login_part_form_iner">
<h3>Register! <br>
It’s quick and easy.</h3>
<form class="row contact_form" action="inscription.php" method="post" >
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control"  name="c_name"  placeholder="Name" required>
</div>

<div class="col-md-12 form-group p_star">
<input type="text" class="form-control"  name="c_prenom"  placeholder="First name" required>
</div>

<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" name="c_adresse" placeholder="Adresse" required>
</div>

<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" id="tel" name="c_tel" placeholder="Phone number" required>
</div>

<div class="col-md-12 form-group p_star">
<input type="email" class="form-control" id="email" name="c_email" placeholder="Email" required>
</div>

<div class="col-md-12 form-group p_star">
<input type="password" class="form-control" id="password" name="c_password"  placeholder="Password" required>
</div>


<button type="submit" name="register" class="btn_3">
Register! 
</button>

</div>
</form>
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
<script src="assets/js/magnific.js"></script><script>eval(mod_pagespeed_nqEp4ru0AF);</script>

<script>eval(mod_pagespeed_UIGkZC$1YI);</script>
<script>eval(mod_pagespeed_1koFnvWiqU);</script>
<script>eval(mod_pagespeed_bh4Mt9M5Vq);</script>

<script>eval(mod_pagespeed_qCWqHbhHjW);</script>
<script>eval(mod_pagespeed_sO9pJ8Us7_);</script>
<!--<script src="assets/js/jqueryvalidate.js"></script><script>eval(mod_pagespeed_xR93SgUb3P);</script>-->
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


<?php 
if(isset($_POST['register'])){


 
 $ip = getIp();
 
 $c_name = $_POST['c_name'];
 $c_prenom = $_POST['c_prenom'];
 $c_adresse = $_POST['c_adresse'];
 $c_tel = $_POST['c_tel'];
 $c_email = $_POST['c_email'];
 $c_password = $_POST['c_password'];
 
 $insert_c ="insert into customers (customer_ip,customer_name,customer_prenom,customer_adresse,customer_tel,customer_email,customer_password)
 values ('$ip','$c_name','$c_prenom','$c_adresse','$c_tel','$c_email','$c_password')";
 
 $run_c = mysqli_query($con, $insert_c);
 
 $sel_cart = "select * from cart where ip_add='$ip'";

 $run_cart = mysqli_query($con, $sel_cart);

 $check_cart = mysqli_num_rows($run_cart);

 if($check_cart==0){
  
  $_SESSION['customer_email']=$c_email;
 
   echo"<script>alert('Votre inscription a été effectuer!')</script>";

   echo "<script>window.open('index.php','_self')</script>";
 

 }

else {
  $_SESSION['customer_email']=$c_email;
 
  echo "<script>alert('Votre inscription a été effectuer!')</script>";

  echo "<script>window.open('checkout.php','_self')</script>";


}


}
?>