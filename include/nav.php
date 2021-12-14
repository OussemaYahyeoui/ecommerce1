


<header>


<div class="header-area">
<div class="main-header ">

<div class="header-bottom  header-sticky">
<div class="container-fluid">
<div class="row align-items-center">

<div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
<div class="logo">
<a href="index.php"><img src="data:image/webp;base64,UklGRuYBAABXRUJQVlA4TNkBAAAvZYAFEJdAkG1T6+Hd7gwCgRSnMMQCksRb/d8VEASQpDDD/mqHcIL+KLICQgw+yJJkJw6kNz2IhxCL8f1vK4Hd63dE/ycgp3P82Inn7zRV1fXzVZL8U+n2hys4v1stal0Cs+LUbET5slrUpmyGmdkN3E0lWK0WrT19klRuewbAQwsm9z0HRpIXGkmXlFvLn1J52N4wntZ80hgtnqp8wqI3dZzPBs/bQWEk5Yj1CVucgeESsJwCvRdnvV+AMLTRAq5dLDCS1EvScFxPthnoTgB0VVUBUN2CH8ENIBVnJ8V6z5kkiwDAcPbedDoTDo/UdfjL8WBkAFiuwYvje7kwLG3lF+jvQALZVITT1R4G+aykGADEApJlPcqBBAjuzYi6O5cHOF+9BGR/guAOcpA2VzScjVN8BoB0mWMCYCfqZnAH+cnlOt58NnvvXQBMNwE0N4LmigDI1VU8EadBLaWUBnz4jWyBSZINwNoNV/q1gNuxzDWV/nqESpJNkDr9jY9//n9wCIhjHVNdArAcSQNg7lDzs9uRhWHFe5huq/D1JOtRSXiGEcSaPgPjoEqQ9ADZDmrCG5gHlvEpkK4kSx3YT9MNsFpgF+JHSL2Q1HbBb/C2CD4zJ8Hn5pTxFAA=" alt=""></a>
</div>
</div>
<div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">

<div class="main-menu f-right d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a href="index.php">Home</a></li>
<!--<li><a href="Categorie.php">Catagorie</a></li>-->
<li class="hot"><a href="toutlesproduits">All Products</a>

</li>

<li><a href="about.php">About</a>

</li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>
</div>
<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
<ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
<li class="d-none d-xl-block">
<div class="form-box f-right ">
<form method="GET" action="results.php" >
<input type="text" name="user_query" placeholder="Search">
<div  class="search-icon">
<button name="search" type="submit"> <i class="fas fa-search special-tag"></i></button> 
<!--<i class="fas fa-search special-tag"></i>-->
</form>
</div>
</div>
</li>

<li>
<div class="shopping-card">
<a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
</div>
</li>
<?php
 if(!isset($_SESSION['customer_email'])){
echo"<li class='d-none d-lg-block'> <a href='checkout.php' class='btn header-btn'>Login</a></li>";
 }
 else {

    echo"<li class='d-none d-lg-block'> <a href='logout.php' class='btn header-btn'>Logout</a></li>";
   
 }
?>
</ul>

</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>
<!--
    <div class="select-this">
<form action="#">
<div class="select-itms">
<select name="select" id="select1">
<option value="">USA</option>
<option value="">SPN</option>
<option value="">CDA</option>
<option value="">USD</option>
</select>
</div>
</form>
</div>
-->


<!-- 
<div id="shopping_cart" class="header-info-right">    
<ul>
<li><a href="login.html">My Account </a></li>
<li><a href="product_list.html">Wish List </a></li>
<li><a href="cart.html">Shopping</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
</ul> 
-->