<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

session_start();


// Lancement de la fonction lire la BDD 
$donnees = viewStagiaires();

// Envoi des informations de la BDD dans le front 
for ($i=0; $i < 16; $i++) { 
    
    $_SESSION["nom$i"] = ($donnees[$i]['NOM']);
    $_SESSION["prenom$i"] = ($donnees[$i]['PRENOM']);
    $_SESSION["place$i"] = ($donnees[$i]['PLACE']);
    }

header('location:../view/select.php');
