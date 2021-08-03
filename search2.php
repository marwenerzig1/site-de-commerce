<html>
<head>
<meta charsat="utf_8">
<title>search</title>
<link rel="stylesheet" href="style4.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
  <a class="navbar-brand" href="http://localhost/5edmty/projet/produit.php?#">Produit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" id="ss" href="#"><span class="sr-only">Ordinateur Portable</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/ordinateur_de_bureau.php?#">Ordinateur De Bureau</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search2.php" method="POST">
      <input class="form-control mr-sm-2" id="search" type="search" name="search" placeholder="Search">
      <button class="btn btn btn-primary my-2 my-sm-0" id="btn" name="ok" type="submit">Search</button>
    </form>
    <?php
 // Récupérer les notes depuis la BdD :
 include("connexion2.php") ; 
 $res_notes = $cnx->query("SELECT * from panier"); 
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_notes = $res_notes->fetchAll(); // Ceci est un tableau de tableaux associatifs
 // Calculer le nombre d'étudiants
 $nbr_etudiants = count($les_notes);

 if($nbr_etudiants == 0){
            echo "<form class='form-inline my-2 my-lg-0'>" ;
            echo "<a class='btn btn-success btn-sm ml-3' href='panier.php'>" ; 
            echo "<i class='fa fa-shopping-cart'></i> Panier" ; 
            echo "</a></form>" ;
 }
else
{
            echo "<form class='form-inline my-2 my-lg-0'>" ;
            echo "<a class='btn btn-success btn-sm ml-3' href='panier.php'>" ; 
            echo "<i class='fa fa-shopping-cart'></i> Panier" ; 
	          echo "<span class='badge badge-light'>$nbr_etudiants</span>" ; 
            echo "</a></form>" ;
}
?>
  </div>

</nav>

<?php
 // Récupérer les notes depuis la BdD :
 $vsearch=$_POST['search'] ; 
 include("connexion2.php") ; 
 $res_notes = $cnx->query("SELECT * FROM pc_portable WHERE nom LIKE '%{$vsearch}%'"); 
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
 echo "<table class='table table-bordered'>";
 echo "<tr><th>id</th><th>image</th><th>nom</th><th>caracteristique</th><th>prix</th><th>form</th></tr>";
foreach ($les_notes as $item) {
echo "<tr><td>" . $item[0]."</td><td>" ."<img src='$item[4]'  width=200px height=200px>"."</td><td>" . $item[1]."</td><td>".$item[2]."</td><td>".$item[3]."</td><td>"."<a href='acheter2.php?pp1=$item[0]'><input type='submit' value='Ajouter au Panier' class='btn btn-success'></a>"."</td></tr>";
}
echo "</table>";
}
?>
</body>
</html>