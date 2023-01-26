<?php

include "../modele/functions.php";

session_start();

$_SESSION = NULL;

$listStagPlace = placesStagRotate('$listStagPlaces');

$_SESSION['$listStagPlace'] = $listStagPlace;
$_SESSION['jsonFile']='controller\save\Save.json';

header('Location: ../views/affichage.php');