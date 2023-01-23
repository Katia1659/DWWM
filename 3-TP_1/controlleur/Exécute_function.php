<?php
include ('../modele/Function.php');
// Execute la Fonction une

$listStag = ReadFileToArray('../modele/Liste.txt');

// Rentre le tableau des places

$listPlaces=array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");

// Execute la fonction deux
$listStagePlaces= generateStagPlaces($listPlaces,$listStag);

// Execute la fonction trois
$filePath=saveListStagToJson($listStagePlaces);

// Execute fonction quatre
// $listStagePlaces = autre_fichier($filePath);

// Execute la fonction cinq
$affichage = placeStagRotate($filePath);

// foreach ($affichage as $key => $value) {
//     echo  $key." => " .$value." | ";
// }


?>