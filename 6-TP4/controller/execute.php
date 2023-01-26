<?php

include_once ('../modele/fonctions.php');
session_start();

$listStagPlace= './save/Backup.json';

// Décalage des valeurs 
$listStagPlace = placesStagRotate($listStagPlace);


$_SESSION['$listStagPlace']=$listStagPlace;


header('Location: ../view/affichage.php');

?>
