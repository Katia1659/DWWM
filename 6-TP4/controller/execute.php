<?php

include '../modele/function.php';

session_start();

//on déclare les variables
$filePath = $_FILES['file']['tmp_name'];
$postes = array ('place_1', 'place_2', 'place_3', 'place_4', 'place_5', 'place_6', 'place_7', 'place_8', 'place_9', 'place_10', 'place_11', 'place_12', 'place_13', 'place_14', 'place_15', 'place_16',);
$fileJsonPath = "../controller/JASON/postes_pc_version.json";


//On appelle les fonctions
$listenom = readFileToArray($filePath);

$salle = generateStagPlaces($postes, $listenom);


$_SESSION['$listPlaceStag'] =  $salle;
saveListStagToJson($salle);

header('Location: ../view/affichage.php');




//on affiche le tableau
// foreach ($salle as $key => $value) {
//     echo "$key : $value";
//     echo PHP_EOL;
// }

?>