<?php

require ('../model/functions.php');
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

$filePath = ($_FILES['file']['tmp_name']);
$listStag =  readFileToArray($filePath);


$listStagPlaces = generateStagPlaces($listPlaces, $listStag);


$listStagPlaces = randomizePlacesStag($listStagPlaces);


$listStagPlaces = saveListStagToJson($listStagPlaces);


// $listStagPlaces = jsonToArray($filePath);


$bJson = '../controller/Save/Save.json';
$listStagPlaces = placesStagRotate($bJson);
$_SESSION ['tableauFinal'] = $listStagPlaces;
print_r($listStagPlaces);
header('Location: ../view/affichage.php');
