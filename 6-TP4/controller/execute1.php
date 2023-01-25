<?php
include('../modele/functions.php');
session_start();
header('Location: ../view/affichage.php');


// recupérier le chemin vers le fichier aploader:
$filPath = $_FILES['file']['tmp_name'];
// crée les tableaux list
$listStag = readFileToArray($filPath);
$listPlaces = array();
for ($i = 0; $i < sizeof($listStag); $i++) {
    $listPlaces[$i] = "Place_" . $i + 1.;
}

$listStagPlaces = generateStagePlaces($listPlaces, $listStag);


// saveListStagToFile($listStagPlaces);

$jsonFile = saveListStagToJson($listStagPlaces);

$_SESSION['json'] = $jsonFile;
$_SESSION['$nweRotation'] = placesStagRotate('json/jFile.json');
