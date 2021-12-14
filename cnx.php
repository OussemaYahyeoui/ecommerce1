<?php 
 session_start();

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['password']))      $password=$_POST['password'];
else      $password="";
$con=@mysqli_connect("localhost","root","","pff") or die("erreur de connexion au serveur $host");;
mysqli_select_db($con,"pff")  or die('Erreur de selection '.mysqli_error()); ;
$req="select customer_email,customer_password from customers where customer_email='$email' and customer_password='$password'";
$res=mysqli_query($con,$req) or die('Erreur SQL !'.$req.'<br>'.mysqli_error()); 
$nb=mysqli_num_rows($res);
if($nb) {
	
echo "<script>alert('Vous ete bien connecté')</script>";
			echo "<script>window.open('index.php','_self')</script>";
}
else { echo "<script>alert('Erreur de connexion')</script>";
			echo "<script>window.open('login.php','_self')</script>";
}
 mysqli_close();

?>
