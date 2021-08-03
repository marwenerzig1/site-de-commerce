<?php
// Récupérer l'id à modifier (depuis la page précédente)
$id = $_REQUEST['pp1'];
// Connexion à la bdd
include("connexion2.php");
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$res = $cnx->query("SELECT * FROM pc_portable WHERE id=$id");
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un produit</title>
</head>
<body>
 <h1>Modifier un produit</h1>
 <?php require_once 'modif-sql-action2.php' ?> 
<form action="modif-sql-action2.php" method="POST" >
 Id : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom'] ?>"></br>
 Caracteristique : <input type="text" name="carac" value="<?php echo $etd['caracteristique'] ?>"></br>
 Prix : <input type="text" name="prix" value="<?php echo $etd['prix'] ?>"></br>
 Image : <input type="file" name="image" value="<?php echo $etd['img'] ?>"></br>
 <input type="hidden" name="id" value="<?php echo $etd[0] ?>">
 <input type="submit" value="Modifier" name="modifier">
 </form>
</body>
</html>