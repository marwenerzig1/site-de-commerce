<?php
// Ouvrir une session
session_start();
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if(!isset($_SESSION['id'])) // Accès non authentifié !
{
 // Afficher un message d'erreur
header("location:home.php"); 
 // Arrêter l'exécution de ce script
 exit();
}
$id_etudiant = $_SESSION['id'];
// Connexion à la bdd
include("connexion2.php");
// Récupérer les données de l'étudiant connecté depuis la bdd
$res = $cnx->query("select * from connexion where id=$id_etudiant");
$etd = $res->fetch();
?>
<!DOCTYPE html>
<html>
<head>
<meta charsat="utf_8">
<title>Produit</title>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="style9.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
  <a class="navbar-brand" href="http://localhost/5edmty/projet/produit2.php?#">Produit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/ajouter.php?#">Ajouter produit</a>
      </li>
      <li class="nav-item">
      <form action="sedeconnecteraction.php" method="POST">
        <a class="nav-link" href="logout.php" >Se déconnecter</a>
        </form>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search">
      <button class="btn btn btn-primary my-2 my-sm-0" id="btn" type="submit">Search</button>
    </form>
  </div>
</nav>

<section>

<div id="div1">
<a href="http://localhost/5edmty/projet/ordinateur_portable2.php?#" >  <img src="pc_portable.jpg" id="img1" width="350px" height="auto"> </a>
<p id="tt">Ordinateur Portable</p>
</div>

<div id="div2">
<a href="http://localhost/5edmty/projet/ordinateur_de_bureau2.php?#" >  <img src="pc_fix.jpg" id="img2" width="350px" height="auto"> </a>
<p id="tt2">Ordinateur De Bureau</p>
</div>

</section>

<footer class="bg-light text-center text-lg-start" id="xx">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="#">MarweneRzig</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>