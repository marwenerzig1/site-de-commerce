<?php
// Récupérer les données de connexion
$vemail=$_POST['adresse'];
$vmdp=$_POST['password'];
// Connexion à la bdd
include("connexion2.php");
// Vérifier que les codes d’accès sont corrects
$res = $cnx->query("SELECT * FROM connexion WHERE adresse='$vemail' AND password='$vmdp'");
$etd = $res->fetch();
if ($etd){ // Les codes sont corrects
 // Ouvrir une session
 session_start(); 
 // Créer une variable de session appelée 'id_etudiant' initialisée
 // à l'identifiant de l'étudiant connecté
 $_SESSION['id'] = $etd['id'];
 // Redirection vers le tableau de bord "dashboard.php"
 header('location:http://localhost/5edmty/projet/produit2.php?#'); 
}
else { // Les codes sont faux
    header('location:http://localhost/5edmty/projet/connexion.php?#');  
    
}
