<?php
/*
// Récupérer l'id à supprimer
$id = $_REQUEST['dd'];
// Connexion à la bdd
include("connexion.php");
// Supprimer l'enregistrement
$stmt=$cnx->exec("DELETE FROM notes where id=$id");
// Redirection à la page principale
if(!$stmt) 
echo('echec de suppression'.$cnx->errorInfo()); 
else 
header("location:notes-sql.php"); */
?> 
<?php 
$id = $_REQUEST['dd1'];  
include("connexion2.php") ; 
$stmt = $cnx->exec("DELETE FROM pc_portable where id=$id") ; 
if(!$stmt){
    echo('echec de suppression'.$cnx->errorInfo()); 
}
else{
    header("location:ordinateur_portable2.php"); 
}