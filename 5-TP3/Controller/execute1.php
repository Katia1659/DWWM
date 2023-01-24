<?php
include('../modele/functions.php');
session_start();
// header('Location: ../view/affichage.php');
// variables en dure:


$filPath = $_FILES['file']['tmp_name'];

$listStag = readFileToArray($filPath);

$places= readFileToArray('..\Modele\places.txt');

$listStagPlaces = generateStagePlaces($places, $listStag);


// // saveListStagToFile($listStagPlaces);

$jsonFile=saveListStagToJson($listStagPlaces);


$_SESSION['$nweRotation']=placesStagRotate($jsonFile);

header('Location:..\View\affichage.php');



