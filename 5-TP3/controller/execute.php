<?php


include "../modele/functions.php";
session_start();
$Place = array('Place_1','Place_2','Place_3','Place_4','Place_5','Place_6','Place_7','Place_8','Place_9','Place_10','Place_11','Place_12','Place_13','Place_14','Place_15','Place_16') ;

$filePath = $_FILES['file']['tmp_name'];


//met le fichier en tableau
$files = readFileToArray($filePath);


//combine les 2 tableaux
$prenom = $files;
$prenomEtPlace = generateStagPlaces($prenom, $Place);


// change les Places aleatoirement 
$file = randomizePlacesStag($prenomEtPlace);


//enrigistre en json 
$fileJson = saveListStageToJson($file);



$_SESSION['listPlaceStag']= placeStagRotate('../modele/Backup.json');
header('location: ../View/affichage.php');



?>