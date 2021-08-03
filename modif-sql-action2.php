<?php
$mysqli = new mysqli('localhost','root','','contact') or die(mysqli_error($mysqli)); 
session_start(); 
if(isset($_POST['modifier'])){
    $id = $_POST['id'];
    $vnom = $_POST['nom']; 
    $vcarac = $_POST['carac'];
    $vimage = $_POST['image'];
    $vprix = $_POST['prix'];
    $mysqli->query("UPDATE pc_portable SET  nom='$vnom', caracteristique='$vcarac', prix='$vprix' , img='$vimage' WHERE id=$id") or die($mysqli->error) ; 
    header("location:ordinateur_portable2.php"); 
} 
?>