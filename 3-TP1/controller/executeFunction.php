<?php

include_once '../modele/function.php';

//On déclare certaines variables en dur

//tableau des places
$postes = array ('place_1', 'place_2', 'place_3', 'place_4', 'place_5', 'place_6', 'place_7', 'place_8', 'place_9', 'place_10', 'place_11', 'place_12', 'place_13', 'place_14', 'place_15', 'place_16',);

//chemin pour la fonction readFileToArray
$filePath = '../controller/listStag.txt';

//chemin pour la fonction placesStagRotate
$fileJsonPath = "../controller/JASON/postes_pc_version.json";

//==================================================================================


//On appelle la fonction et on créer le tableau des noms

$listenom = readFileToArray($filePath);

//On appelle la fonction et on créer le tableau associatif
$salle = generateStagPlaces($postes, $listenom);


//On appelle la fonction pour créer le json de base
saveListStagToJson($salle);

// //On appelle la fonction pour changer les postes
// $tableResult = array();
$tableResult = placesStagRotate($fileJsonPath);


//on affiche le tableau
foreach ($tableResult as $key => $value) {
    echo "$key : $value";
    echo PHP_EOL;
}


?>