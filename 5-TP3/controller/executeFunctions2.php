<?php


require ('../modele/functions.php');

session_start();


$fichier = '../controller/Save/Save.json';

$listStagPlaces = placesStagRotate("$fichier");


$_SESSION['$listStagPlaces'] = $listStagPlaces;

header('Location: ../views/affichage.php');

