<?php 

require ('../model/functions.php');

session_start();
$bJson = '../controller/Save/Save.json';
$listStagPlaces = placesStagRotate($bJson);
$_SESSION ['tableauFinal'] = $listStagPlaces;
print_r($listStagPlaces);
header('Location: ../view/affichage.php');
