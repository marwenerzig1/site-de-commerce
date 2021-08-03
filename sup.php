<?php 
$id = $_REQUEST['pp1'];  
include("connexion2.php") ; 
$stmt = $cnx->exec("DELETE FROM panier where id=$id") ; 
if(!$stmt){
    echo('echec de suppression'.$cnx->errorInfo()); 
}
else{
    header("location:panier.php"); 
}