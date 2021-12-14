
<!doctype html>
<?php 
 
 session_start();

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
  <?php 
 if(!isset($_SESSION['customer_email'])){
  
  include("customer_login.php");
   
 }
  else{
    include("payment.php");
  }

  ?> 



<?php include("include/footer.php") ?> 


<script src="https://preview.colorlib.com/theme/estore/assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="https://preview.colorlib.com/theme/estore/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://preview.colorlib.com/theme/estore/assets/js/popper.min.js+bootstrap.min.js+jquery.slicknav.min.js.pagespeed.jc.tZyD-FwHec.js"></script><script>eval(mod_pagespeed_uLS_3jiC9P);</script>
<script>eval(mod_pagespeed_dEXX7W4Qj$);</script>

<script>eval(mod_pagespeed_fKzsIdr7CL);</script>

<script src="https://preview.colorlib.com/theme/estore/assets/js/owl.carousel.min.js+slick.min.js+wow.min.js+animated.headline.js.pagespeed.jc.wJ9RpF0nwF.js"></script><script>eval(mod_pagespeed_t4vdyadhrM);</script>
<script>eval(mod_pagespeed_ZPIuHAdCMa);</script>

<script>eval(mod_pagespeed_PbZmGjTJEF);</script>
<script>eval(mod_pagespeed_QSDhf3cFEK);</script>
<script src="https://preview.colorlib.com/theme/estore/assets/js/jquery.scrollUp.min.js+jquery.nice-select.min.js+jquery.sticky.js+jquery.magnific-popup.js+contact.js+jquery.form.js.pagespeed.jc.VKQkdPtnQp.js"></script><script>eval(mod_pagespeed_nqEp4ru0AF);</script>

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