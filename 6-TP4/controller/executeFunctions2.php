<?php


require ('../modele/functions.php');

session_start();


$fichier = '../controller/Save/Save.json';

$listStagPlaces = placesStagRotate("$fichier");


$_SESSION['$listStagPlaces'] = $listStagPlaces;

$fichier = arrayToCsv($fichier);

// $file = './file.csv';

// replaceBy($file);

header('Location: ../views/affichage.php');