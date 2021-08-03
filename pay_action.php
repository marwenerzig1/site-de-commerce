<?php 
$mysqli = new mysqli('localhost','root','','contact') or die(mysqli_error($mysqli)); 
session_start() ;  
if(isset($_POST['valid'])){
    $vname = $_POST['name'] ; 
    $vemail= $_POST['email'] ; 
    $vnumber= $_POST['number'] ; 
    $mysqli->query("INSERT INTO pay(nom,email,number) values ('$vname','$vemail','$vnumber')") ;  
    header('location:produit.php'); 
}
?>