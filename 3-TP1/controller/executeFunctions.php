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



$listStag = readFileToArray('../controller/listStag.txt');


$listStagPlaces = generateStagPlaces($listPlaces, $listStag);


//$listStagPlaces = randomizePlacesStag($listStagPlaces);



$filePath = saveListStagToJson($listStagPlaces);


$listStagPlaces = jsonToArray($filePath);



$listStagPlaces = placeStagRotate($listStagPlaces);


$_SESSION['$listStagPlaces'] = $listStagPlaces;


header('Location: ../view/affichage.php');

// print_r($_SESSION['$listStagPlaces']);