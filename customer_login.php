<?php 

include("include/connexiondb.php");
include("functions/functions.php");

?>



<div class="slider-area ">

<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/2.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Connexion</h2>
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
<h2>New to our Shop ?</h2>
<p>There are advances being made in science and technology everyday , and a good example of this is the .</p>
<a href="inscription.php" class="btn_3">CREATE AN ACCOUNT</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="login_part_form">
<div class="login_part_form_iner">
<h3>Welcome Back !<br>
Please Sign in Now</h3>
<form class="row contact_form" action="" method="post">
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" name="email"  placeholder="Email" required/>
</div>
<div class="col-md-12 form-group p_star">
<input type="password" class="form-control"  name="password"  placeholder="Password" required/>
</div>
<div class="col-md-12 form-group">
<div class="creat_account d-flex align-items-center">
<input type="checkbox" id="f-option" name="selector">
<label for="f-option">Remember me</label>
</div>
<button type="submit" name="login" value="submit" class="btn_3">
Connexion
</button>
<a class="lost_pass" href="#">Forget Password ?</a>
</div>
</form>
<?php
 
 
 if(isset($_POST['login'])){

    $c_email = $_POST['email'];

    $c_password = $_POST['password'];

    $sel_c = "select * from customers where customer_password='$c_password' AND customer_email='$c_email'";

    $run_c = mysqli_query($con, $sel_c);

    $check_customer = mysqli_num_rows($run_c);

    if($check_customer==0){

        echo "<script>alert('Mot de Passe ou Email incorrect!')</script>";
        exit();
    }

    $ip = getIp();

    $sel_cart = "select * from cart where ip_add='$ip'";

    $run_cart = mysqli_query($con, $sel_cart);
   
    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer>0 AND $check_cart==0){

        $_SESSION['customer_email']=$c_email;
 
        echo"<script>alert('Vous êtes Connecté Avec Succès!')</script>";
     
        echo"<script>window.open('index.php','_self')</script>";
      

    }

    else {

        $_SESSION['customer_email']=$c_email;
 
        echo"<script>alert('Vous êtes Connecté Avec Succès!')</script>";
     
        echo"<script>window.open('checkout.php','_self')</script>";

    }


 }




?>
</div>
</div>
</div>
</div>
</div>
</section>