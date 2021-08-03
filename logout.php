<?php
// Démarrer une session
session_start(); 
// Détruire toutes les données de la session courant
session_destroy(); 
// Redirection vers la page de connexion
header("location:home.php") ; 
