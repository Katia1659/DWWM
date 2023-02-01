<?php
require_once '../Modele/function.php';
require_once '../Modele/DBManagement.php';

$filePath = $_FILES['file']['tmp_name'];

$tabStag = readFileToArray($filePath);

$place = [
    'PLACE_1',
    'PLACE_2',
    'PLACE_3',
    'PLACE_4',
    'PLACE_5',
    'PLACE_6',
    'PLACE_7',
    'PLACE_8',
    'PLACE_9',
    'PLACE_10',
    'PLACE_11',
    'PLACE_12',
    'PLACE_13',
    'PLACE_14',
    'PLACE_15',
    'PLACE_16'
];

$placeStag = generateStagPlaces($place, $tabStag);

$placeStag = generateTabMulti($placeStag);

$status = insertStagiaires2($placeStag);

if ($status) {
    header('Location: ../View/index.html');
}else {
    echo 'Il y a eu un problème';
}
