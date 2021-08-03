<?php 
$mysqli = new mysqli('localhost','root','','contact') or die(mysqli_error($mysqli)); 
session_start() ;  
if(isset($_POST['valid'])){
    $vname = $_POST['name'] ; 
    $vemail= $_POST['email'] ; 
    $vmessage= $_POST['message'] ; 
    $mysqli->query("INSERT INTO contacte (nom,email,message) values ('$vname','$vemail','$vmessage')") ;  
    header('location:http://localhost/5edmty/projet/contact.php?#'); 
}
?>
