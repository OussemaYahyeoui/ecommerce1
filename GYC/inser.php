<?php
  $cnx = mysqli_connect( "localhost", "root", "" ,"pff" ) ;



//getting the text data from fields


$product_cat = $_POST['product_cat'];
$product_brand = $_POST['product_brand'];
$product_title = $_POST['product_title'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$product_keywords = $_POST['product_keywords'];
 
//getting the image 
$product_image = $_FILES['product_image']['name'];
$product_image_tmp = $_FILES['product_image']['tmp_name'];
 move_uploaded_file($product_image_tmp,"product_images/$product_image");




   $insert_product ="insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)
  values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

  $requete = mysqli_query($cnx, $insert_product) or die (mysqli_error($cnx)); 
  
     if($requete)
  {
    echo "<script>window.open('ajoutproduit.php','_self')</script>";
  }
  else
  {
    echo("L'insertion a e echoue") ;
  }
   









?>