<?php
include 'functions.php';

// INITIALISATION DES VARIABLES
$tabPlaces = array();
$listStag = array();
$decode = array();

for ($i = 0; $i < 16; $i++) {
    $a = $i + 1;
    $tabPlaces[$i] = "Place_$a";
}

//Création d'un tableau pour les noms 
$listStag = readFileToArray('listStag.txt');

// LANCEMENT DES FONCTIONS
//Création d'un tableau pour les places 
$tabPlacesEtStag = generateStagPlaces($tabPlaces, $listStag );

//Combine les deux tableaux
saveListStagToJson($tabPlacesEtStag, $listStag);

$listPlaceStag = file_get_contents('save.json');
$tabFinal = placesStagRotate($listPlaceStag);

//affichage du tableau 
print_r($tabFinal);