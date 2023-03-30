<?php

include_once ('../modele/fonctions.php');

session_start();

// Passage du tableau melangé en format json 

$listStagPlace= './save/Backup.json';

// Décalage des valeurs 
$listStagPlace = placesStagRotate($listStagPlace);

$_SESSION['$listStagPlace'] = $listStagPlace;

header('Location: ../view/affichage.php');




?>

