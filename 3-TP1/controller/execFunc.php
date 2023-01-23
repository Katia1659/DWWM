<?php
require_once '..\modele\function.php';
session_start();
$stag = readFileToArray('../controller/listStag.txt');

$place = readFileToArray('../controller/listPlace.txt');

$listPlaceStag = generateStagPlaces($place, $stag);


//$listPlaceStag = randomizePlacesStag($listPlaceStag);


$listPlaceStag = saveListStagToFile($listPlaceStag);


$listPlaceStag = placeStagRotate($listPlaceStag);

$_SESSION['listPlaceStag'] = $listPlaceStag;

header('Location: ../view/affichage.php');
