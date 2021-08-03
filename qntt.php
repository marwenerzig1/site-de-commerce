<?php
$mysqli = new mysqli('localhost','root','','contact') or die(mysqli_error($mysqli)); 
session_start();
//if(isset($_POST['verif'])){
$vd = $_POST['ija'];  
$id = $_REQUEST['pp1']; 
echo $vd ; 
echo $id ; 
//$mysqli->query("UPDATE panier SET  quantite='$vd' WHERE id=$id") or die($mysqli->error) ; 
//}
//header("location:panier.php"); 

