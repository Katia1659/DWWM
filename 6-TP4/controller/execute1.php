<?php
include '../modele/functions.php';
session_start();
// INITIALISATION DES VARIABLES
$tabPlaces = array();
$listStag = array();
$decode = array();

for ($i = 0; $i < 16; $i++) {
    $a = $i + 1;
    $tabPlaces[$i] = "Place_$a";
}

// lecture du fichier téléchargé
$chemin = $_FILES['file']['tmp_name'];

//Création d'un tableau pour les noms 
$listStag = readFileToArray($chemin);

// LANCEMENT DES FONCTIONS
//Création d'un tableau pour les places 
$tabPlacesEtStag = generateStagPlaces($tabPlaces, $listStag);

//Combine les deux tableaux!
saveListStagToJson($tabPlacesEtStag);

$listPlaceStag = file_get_contents('../controller/save.json');
$tabFinal = placesStagRotate($listPlaceStag);

//affichage du tableau 
print_r($tabFinal);


//envoi du tableau final 
$_SESSION['$listPlaceStag'] = $tabFinal;
header('Location: ../view/affichage.php');




//change un fichier en fichier CSV
fileEnfileCsv('../controller/save2.json');
