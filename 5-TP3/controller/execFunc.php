<?php
require_once '..\modele\function.php';
session_start();

$filePath = $_FILES['file']['tmp_name'];

$stag = readFileToArray($filePath);

$place = [
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
];

$listPlaceStag = generateStagPlaces($place, $stag);


//$listPlaceStag = randomizePlacesStag($listPlaceStag);


saveListStagToFile($listPlaceStag);


$_SESSION['listPlaceStag'] = $listPlaceStag;


header('Location: ../view/affichage.php');
