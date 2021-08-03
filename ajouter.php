<html>
<head>
<meta charsat="utf_8">
<title>Ajouter Produit</title>
<link rel="stylesheet" href="style2.css"> 
<link rel="stylesheet" href="style6.css">
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
        <a class="nav-link" id="ss" href="#">Ajouter produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/home.php?#" >Se déconnecter</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search">
      <button class="btn btn btn-primary my-2 my-sm-0" id="btn" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="ja3">
<form action="ajouter_action.php" method="POST">
<h1>Saisir un produit</h1> 
<label>Type de produit :</label> <br><select class="span2" name="expiry_year">
                <option value="1" name="portable">pc portable</option>
                <option value="2" name="bureau">pc de bureau</option>
</select><br>
<label>Nom de la produit : </label><br><input type="text" name="nom"> <br> 
<label>Sa caracteristique :</label><br><input type="text" name="caract"> <br> 
<label>Prix : </label><br><input type="number" name="prix" min="0" max="90000" > <br> 
<label>image :</label><br><input type="file" name="img"> <br> <br>
<input type="submit" name="save" class="btn btn-primary" value="Sauvegarder"> <br>
</div>
</form>
</body>
</html>

