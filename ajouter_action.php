<?php 
$mysqli = new mysqli('localhost','root','','contact') or die(mysqli_error($mysqli)); 
session_start() ;  

if(isset($_POST['save'])){
    $vchoix = $_POST['expiry_year'] ; 
    if($vchoix==1){
    $vnom = $_POST['nom'] ; 
    $vcaracte= $_POST['caract'] ; 
    $vprix= $_POST['prix'] ;  
    $vimg= $_POST['img'] ; 
    $mysqli->query("INSERT INTO pc_portable(nom,caracteristique,prix,img) VALUES('$vnom','$vcaracte','$vprix','$vimg')") ;  
    header('location:http://localhost/5edmty/projet/ordinateur_portable2.php?#'); 
    }
    else{
        $vnom = $_POST['nom'] ; 
        $vcaracte= $_POST['caract'] ; 
        $vprix= $_POST['prix'] ;  
        $vimg= $_POST['img'] ; 
        $mysqli->query("INSERT INTO pc_de_bureau(nom,caracteristique,prix,img) VALUES('$vnom','$vcaracte','$vprix','$vimg')") ;  
        header('location:http://localhost/5edmty/projet/ordinateur_de_bureau2.php?#');   
    }
}
?>

