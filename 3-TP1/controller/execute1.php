<?php
include('../modele/functions.php');
session_start();
header('Location: ../view/affichage.php');
// variables en dure:
$filPath = '../modele/listStag.txt';
$places = '../modele/places.txt';



$listStag = readFileToArray($filPath);
$listPlaces = readFileToArray($places);

$listStagPlaces = generateStagePlaces($listPlaces, $listStag);



// saveListStagToFile($listStagPlaces);
// $jsonFile=saveListStagToJson($listStagPlaces);
// echo "\n jason file : ".$jsonFile;

$save = file_get_contents('json/jFile2.json');

$_SESSION['$nweRotation']=placesStagRotate($save);

var_dump($_SESSION['$nweRotation']['Place_1']);

