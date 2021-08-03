<!doctype html>
<html>
<head>
<title>panier</title>
<link rel="stylesheet" href="style12.css"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
            <li class="nav-item active">
        <a class="nav-link" href="http://localhost/5edmty/projet/produit.php?#"><span class="sr-only">Produit</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/qui__somme_nouss.php?#">Qui Sommes-Nous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/contact.php?#" >Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/connexion.php?#" >Connexion</a>
      </li>
            </ul>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">PANIER E-COMMERCE</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
<?php
 // Récupérer les notes depuis la BdD :
 include("connexion2.php") ; 
 $res_notes = $cnx->query("SELECT * from panier"); 
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_notes = $res_notes->fetchAll(); // Ceci est un tableau de tableaux associatifs
 // Calculer le nombre d'étudiants
 $nbr_etudiants = count($les_notes);

 if($nbr_etudiants == 0){
 // Afficher un message si la liste est vide
 echo "<b>Aucune produit pour le moment !</b>";
 }
else
{
echo "<table class='table table-striped'>" ; 
echo "<thead> <tr> " ; 
echo "<th scope='col'> </th>" ; 
echo "<th scope='col'>Produit</th>" ;
echo "<th scope='col'>Disponible</th>" ;
echo "<th scope='col' class='text-center'>Quantité</th>" ;
echo "<th scope='col' class='text-right'>Prix</th>" ;
echo "<th> </th>" ;
echo "</tr> </thead> <tbody> " ;
$somme = 0 ;  
foreach ($les_notes as $item) {
echo "<tr><td><img src='$item[1]' width=50px height=50px /></td><td>" .$item[2]."</td><td>En stock</td><td>".$item[3]."</td><td>".$item[4]." DT</td><td class='text-right'><button class='btn btn-sm btn-danger'><a href='sup.php?pp1=$item[0]' style='color:white;' ><i class='fa fa-trash'></i></a></button> </td></tr>";
$somme = $somme + ($item[4]*$item[3]); 
}
echo "<tr><td></td><td></td><td> la somme est :</td><td>".$somme." DT</td></tr>"; 
echo "</tbody>";
echo "</table>" ;  
}
?>
    </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="pay.php" class="btn btn-block btn-light">Continuer vos achats</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
     <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="#">MarweneRzig</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>