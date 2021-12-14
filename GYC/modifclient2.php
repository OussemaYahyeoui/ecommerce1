<?php
//connection au serveur
$con=mysqli_connect("localhost","root","","pff");

//récupération des valeurs des champs:

$customer_name = $_POST["customer_name"] ;

$customer_prenom = $_POST["customer_prenom"] ;

$customer_adresse = $_POST["customer_adresse"] ;

$customer_tel = $_POST["customer_tel"] ;

$customer_email = $_POST["customer_email"] ;

$customer_password = $_POST["customer_password"] ;

$id = $_POST["customer_id"] ;

//création de la requête SQL:
$sql = " UPDATE customers
SET customer_name = '$customer_name', customer_prenom = '$customer_prenom', customer_adresse = '$customer_adresse', customer_tel = '$customer_tel', customer_email = '$customer_email',customer_password = '$customer_password' WHERE customer_id = '$id' " ;
//exécution de la requête SQL:
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$requete = mysqli_query($con, $sql) ;
//affichage des résultats, pour savoir si la modification a marchée:
if($requete)
{
header('Location: gererclient.php');
}
else
{
echo("La modification à échouée") ;
}
?>