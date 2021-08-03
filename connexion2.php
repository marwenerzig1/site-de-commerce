<?php
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "contact";
try {
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd); 
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();     
}
/*
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-app";
try {
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}*/
?>