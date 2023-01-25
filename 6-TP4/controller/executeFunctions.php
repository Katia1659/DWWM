<?php

require ('../modele/functions.php');
session_start();
$listPlaces = array(
    'Place_1',
    'Place_2',
    'Place_3',
    'Place_4',
    'Place_5',
    'Place_6',
    'Place_7',
    'Place_8',
    'Place_9',
    'Place_10',
    'Place_11',
    'Place_12',
    'Place_13',
    'Place_14',
    'Place_15',
    'Place_16'
);
//On stocke le fichier temporairement

$filePath = $_FILES['file']['tmp_name'];
$listStag = readFileToArray($filePath);


$listStagPlaces = generateStagPlaces($listPlaces, $listStag);

$_SESSION['maListe']=$listStagPlaces;
//$listStagPlaces = randomizePlacesStag($listStagPlaces);


// On enregistre le fichier et on le passe en format .json
$filePath = saveListStagToJson($listStagPlaces);


$listStagPlaces = jsonToArray($filePath);



$listStagPlaces = placeStagRotate($listStagPlaces);


$_SESSION['$listStagPlaces'] = $listStagPlaces;


header('Location: ../view/affichage.php');

// print_r($_SESSION['$listStagPlaces']);