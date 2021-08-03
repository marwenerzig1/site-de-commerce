<!DOCTYPE html>
<html>
<head>
<meta charsat="utf_8">
<title>ordinateur_de_bureau</title>
<link rel="stylesheet" href="style10.css">
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
      <li class="nav-item active">
        <a class="nav-link"  href="http://localhost/5edmty/projet/ordinateur_portable2.php?#"><span class="sr-only">Ordinateur Portable</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ss" href="#">Ordinateur De Bureau</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search">
      <button class="btn btn btn-primary my-2 my-sm-0" id="btn" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
 // Récupérer les notes depuis la BdD :
 include("connexion2.php") ; 
 $res_notes = $cnx->query("SELECT * from pc_de_bureau"); 
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
 // Afficher la liste des étudiant/note sous forme de liste ordonnée
 echo "Il y $nbr_etudiants produits ";
 echo "<table class='table table-striped'>";
 echo "<tr><th>image</th><th>nom</th><th>caracteristique</th><th>prix</th><th>form</th></tr>";
foreach ($les_notes as $item) {
echo "<tr><td>"."<img src='$item[4]'  width=200px height=200px>"."</td><td>" . $item[1]."</td><td>".$item[2]."</td><td>".$item[3]."DT"."</td><td><a href='supp2-sql.php?dd1=$item[0]'>
<input type='submit' value='Delete' class='btn btn-danger'></a></a><a href='modifier3.php?pp1=$item[0]'><input type='submit' value='Modification' class='btn btn-primary'></a></td></tr>";
}
echo "</table>";
}
?>

</body>
</html>