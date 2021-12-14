<?php

$con = mysqli_connect("localhost","root","","pff");

function getIp() {
   
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}





function cart() {

if(isset($_GET['add_cart'])){
   
  global $con;
     
   $ip = getIp(); 

   $pro_id = $_GET['add_cart'];

   $check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";

   
   $run_check = mysqli_query($con, $check_pro);


   if(mysqli_num_rows($run_check)>0) {
     
     echo "";

    

   }

   else {

    $insert_pro ="insert into cart (p_id,ip_add) values ('$pro_id','$ip')";


    $run_pro = mysqli_query($con, $insert_pro) or die (mysqli_error($con)); 

    echo "<script>window.open('index.php','_self')</script>";

   }




}


}




 // getting the total added items 


  function total_items(){
   
      
        if(isset($_GET['add_cart'])) {

           global $con;

           $ip = getIp();

           $get_items = "select * from cart where ip_add='$ip'";

           $run_items = mysqli_query($con, $get_items);

           $count_items = mysqli_num_rows($run_items);

        }

        else {
            global $con;
             
            $ip = getIp();

            $get_items = "select * from cart where ip_add='$ip'";
 
            $run_items = mysqli_query($con, $get_items);
 
            $count_items = mysqli_num_rows($run_items);
             


        }






      echo $count_items;
  }



  // getting the total price 

  function total_price(){
       
         $total = 0 ;
       
       global $con;

           $ip = getIp();

           $sel_price = "select * from cart where ip_add='$ip'";

           $run_price = mysqli_query($con, $sel_price);

           while($p_price=mysqli_fetch_array($run_price)) {

              $pro_id = $p_price ['p_id'];

              $pro_price = "select * from products where product_id='$pro_id'";

              $run_pro_price = mysqli_query($con, $pro_price);

              while ($pp_price = mysqli_fetch_array($run_pro_price)){
                     
                   $product_price = array($pp_price['product_price']);

                   $values = array_sum($product_price);

                   $total +=$values;



              }



           }
      
        

           echo   $total."DT";




  }
















//getting categories

function getCats(){

    global $con;

$get_cats =  "select * from categories";

$run_cats =  mysqli_query($con, $get_cats);

while ($row_cats=mysqli_fetch_array($run_cats)){

$cat_id = $row_cats['cat_id'];

$cat_title = $row_cats['cat_title'];

echo "<p><a href='toutlesproduits.php?cat=$cat_title'>$cat_title</a></p>";


}




}







//getting brands

function getBrands(){

    global $con;

$get_brands =  "select * from brands";

$run_brands =  mysqli_query($con, $get_brands);

while ($row_brands=mysqli_fetch_array($run_brands)){

$brand_id = $row_brands['brand_id'];

$brand_title = $row_brands['brand_title'];

echo "<p><a href='toutlesproduits.php?brand=$brand_title'>$brand_title</a></p>";


}




}

function getPro(){


    if(!isset($_GET['cat'])) {
      
        if(!isset($_GET['brand'])){


    global $con;


    $get_pro = "select * from products ";

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
                    <br>
                    <a href='index.php?add_cart=$pro_id' class='btn hero-btn'>Shop Now</a>
                    </div>
                    </div>
         
         ";



    }


}
    }

}






function getCatPro(){


    if(isset($_GET['cat'])) {
      
        $cat_id= $_GET['cat'];


    global $con;


    $get_cat_pro = "SELECT * from products WHERE product_cat='$cat_id'";

    $run_cat_pro = mysqli_query($con, $get_cat_pro);

    $count_cats = mysqli_num_rows($run_cat_pro);

    if($count_cats==0){
      echo"<h3> No products where found in this category!</h3>";
    }

    while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
          
         $pro_id = $row_cat_pro['product_id'];

         $pro_cat = $row_cat_pro['product_cat'];

         $pro_brand = $row_cat_pro['product_brand'];

         $pro_title = $row_cat_pro['product_title'];

         $pro_price = $row_cat_pro['product_price'];

         $pro_image = $row_cat_pro['product_image'];

         

         echo "
              
                 
    
                    <div class='col-lg-6 col-sm-6'>
                    <div class='single_product_item'>
                    <img src='assets/img/$pro_image' alt=''>
                    <h3> <a href='single-product.php?pro_id=$pro_id'>$pro_title</a> </h3>
                    <p>$pro_price DT</p>
                    <a href='toutlesproduits.php?pro_id=$pro_id' class='btn hero-btn'>Shop Now</a>
                    </div>
                    </div>
         

 

         ";



    }


}
    

}



function getBrandPro(){


    if(isset($_GET['brand'])) {
      
        $brand_id= $_GET['brand'];


    global $con;


    $get_brand_pro = "SELECT * from products WHERE product_brand='$brand_id'";

    $run_brand_pro = mysqli_query($con, $get_brand_pro);

    $count_brands = mysqli_num_rows($run_brand_pro);

    if($count_brands==0){
      echo"<h3> No products where found in this brand!</h3>";
    }

    while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
          
         $pro_id = $row_brand_pro['product_id'];

         $pro_cat = $row_brand_pro['product_cat'];

         $pro_brand = $row_brand_pro['product_brand'];

         $pro_title = $row_brand_pro['product_title'];

         $pro_price = $row_brand_pro['product_price'];

         $pro_image = $row_brand_pro['product_image'];

         

         echo "
              
                 
    
                    <div class='col-lg-6 col-sm-6'>
                    <div class='single_product_item'>
                    <img src='assets/img/$pro_image' alt=''>
                    <h3> <a href='single-product.php?pro_id=$pro_id'>$pro_title</a> </h3>
                    <p>$pro_price DT</p>
                    <a href='toutlesproduits.php?pro_id=$pro_id' class='btn hero-btn'>Shop Now</a>
                    </div>
                    </div>
         

 

         ";



    }


}
    

}


?>







   
   <?php
   function getPromax(){

    global $con;


    $get_promax = "select * from products ";

    $run_promax = mysqli_query($con,$get_promax);

    while($row_promax=mysqli_fetch_array($run_promax)){
          
         $pro_id = $row_promax['product_id'];

         $pro_cat = $row_promax['product_cat'];

         $pro_brand = $row_promax['product_brand'];

         $pro_title = $row_promax['product_title'];

         $pro_price = $row_promax['product_price'];

         $pro_image = $row_promax['product_image'];

         echo "
              
                 
         <div class='col-xl-4 col-lg-4 col-md-6'>
         <div class='single-product mb-60'>
         <div class='product-img'>
         <img src='assets/img/$pro_image' alt=''>
         <div class='new-product'>
         <span>New</span>
         </div>
         </div>
         <div class='product-caption'>
         <div class='product-ratting'>
         <i class='far fa-star'></i>
         <i class='far fa-star'></i>
         <i class='far fa-star'></i>
         <i class='far fa-star low-star'></i>
         <i class='far fa-star low-star'></i>
         </div>
         <h4><a href='single-product.php?pro_id=$pro_id'>$pro_title</a></h4>
         <div class='price'>
         <ul>
         <li>$pro_price DT</li>
         <br>
         <a href='index.php?add_cart=$pro_id' class='btn hero-btn'>Shop Now</a>
         
         </ul>
         </div>
         </div>
         </div>
         </div>
         <br>
         <br>
         
         
         ";



        }
    }
    

    //<li class='discount'>$pro_price</li>










?>