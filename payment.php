<div class="slider-area ">

<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/2.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Checkout</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="checkout_area section_padding">
<div class="container">


<div class="billing_details">
<div class="row">
<div class="col-lg-8">
<h3>Billing Details</h3>
<form class="row contact_form" action="#" method="post" novalidate>
<div class="col-md-6 form-group p_star">
<input type="text" class="form-control" id="first" name="name" required/>
<span class="placeholder" data-placeholder="First name"></span>
</div>
<div class="col-md-6 form-group p_star">
<input type="text" class="form-control" id="last" name="name" required />
<span class="placeholder" data-placeholder="Last name"></span>
</div>

<div class="col-md-6 form-group p_star">
<input type="text" class="form-control" id="number" name="number" required />
<span class="placeholder" data-placeholder="Phone number"></span>
</div>
<div class="col-md-6 form-group p_star">
<input type="text" class="form-control" id="email" name="compemailany" required/>
<span class="placeholder" data-placeholder="Email Address"></span>
</div>
<div class="col-md-12 form-group p_star">
<select class="country_select">
<option value="1">tunis</option>
<option value="2">Ben Arous</option>
<option value="3">Arianna</option>
<option value="4">Mourouj</option>
<option value="5">Aouina</option>
</select>
</div>
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" id="add1" name="add1" required/>
<span class="placeholder" data-placeholder="Address line 01"></span>
</div>
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" id="add2" name="add2" required/>
<span class="placeholder" data-placeholder="Address line 02"></span>
</div>
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" id="city" name="city" required />
<span class="placeholder" data-placeholder="Town/City"></span>
</div>

<div class="col-md-12 form-group">
<input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" required/>
</div>

<div class="col-md-12 form-group">
<div class="creat_account">
<h3>Shipping Details</h3>
<input type="checkbox" id="f-option3" name="selector" />
<label for="f-option3">Ship to a different address?</label>
</div>
<textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
</div>
</form>
</div>
<div class="col-lg-4">
<div class="order_box">

<div class="creat_account">
<input type="checkbox" id="f-option4" name="selector" />
<label for="f-option4">I’ve read and accept the </label>
<a href="#">terms & conditions*</a>
</div>
<a class="btn_3" name="commande" href="index.php">Proceed to commande</a>
</div>
</div>
</div>
</div>
</div>
</section>
<?php 
if(isset($_POST['commande'])){
    echo"<script>alert('Votre inscription a été effectuer!')</script>";
  
}
?>
