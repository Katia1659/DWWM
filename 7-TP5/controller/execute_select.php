<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

session_start();

// Lancement de la fonction lire la BDD 
$donnees = viewStagiaires();

// Envoi des informations de la BDD dans le front 
$_SESSION["donnees"] = $donnees;

header('location:../view/select.php');


