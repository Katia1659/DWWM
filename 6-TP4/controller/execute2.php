<?php

include "../modele/functions.php";

session_start();

$_SESSION = NULL;

$listStagPlace = placesStagRotate('$listStagPlaces');

$_SESSION['$listStagPlace'] = $listStagPlace;


header('Location: ../views/affichage.php');