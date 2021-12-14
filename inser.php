<?php
  $cnx = mysqli_connect( "localhost", "root", "" ,"pff" ) ;



//getting the text data from fields


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];

 




   $insert_product ="insert into clients (nom,prenom,tel,email,password)
  values ('$nom','$prenom','$tel','$email','$password')";

  $requete = mysqli_query($cnx, $insert_product) or die (mysqli_error($cnx)); 
  
     if($requete)
  {
    echo "<script>alert('Votre Inscription a été Effectuer')</script>";  
    echo "<script>window.open('login.php','_self')</script>";
  }
  else
  {
    echo("L'insertion a e echoue") ;
  }
   









?>