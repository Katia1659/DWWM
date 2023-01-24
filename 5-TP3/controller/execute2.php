<?php
include '../modele/functions.php';
session_start();


//création du nouveau tableau
$listPlaceStag = file_get_contents('../controller/save.json');
$tabFinal = placesStagRotate($listPlaceStag);

//affichage du tableau 
print_r($tabFinal);


//envoi du tableau final 
$_SESSION['$listPlaceStag'] = $tabFinal;
header('Location: ../view/affichage.php');
