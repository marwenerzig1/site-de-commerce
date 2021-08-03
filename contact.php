<!DOCTYPE html>
<html>
<head>
<meta charsat="utf_8">
<title>Contact</title>
<link rel="stylesheet" href="style2.css"> 
<link rel="stylesheet" href="style6.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
  <a class="navbar-brand" href="http://localhost/5edmty/projet/home.php?#">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/produit.php?#"><span class="sr-only">Produit</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="http://localhost/5edmty/projet/qui__somme_nouss.php?#">Qui Sommes-Nous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ss" href="#" >Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/5edmty/projet/connexion.php?#" >Connexion</a>
      </li>
    </ul>
  </div>
</nav>
<section>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="contact_action.php" method="POST">
          <fieldset>
            <legend class="ttt">Contactez Nous</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nom</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="votre nom" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="votre email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Veuillez rédiger votre message ici ..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" id="rr" name="valid" class="btn btn-primary btn-lg" onclick="myFunction()">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
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

<script>
function myFunction() {
  alert("Bonjour ! Merci pour votre message !!!");
}
</script>

</body>
</html>
