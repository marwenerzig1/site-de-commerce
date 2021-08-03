<?php 
$id = $_REQUEST['pp1'];  
include("connexion2.php") ; 
$res_notes = $cnx->query("SELECT * from pc_de_bureau where id=$id"); 
// Extraire (fetch) toutes les lignes (enregistrement, rows)
$les_notes = $res_notes->fetchAll(); // Ceci est un tableau de tableaux associatifs
foreach ($les_notes as $row) {
$cnx->query("INSERT INTO panier(img,produit,quantite,prix) VALUES('$row[4]','$row[2]',1,'$row[3]')") ;  
}
header('location:ordinateur_de_bureau.php') ;