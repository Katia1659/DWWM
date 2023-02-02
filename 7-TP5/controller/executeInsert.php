<?php
include "../Modele/function.php";

$filePath = $_FILES['file']['tmp_name'];
$postes = array ('place_1', 'place_2', 'place_3', 'place_4', 'place_5', 'place_6', 'place_7', 'place_8', 'place_9', 'place_10', 'place_11', 'place_12', 'place_13', 'place_14', 'place_15', 'place_16',);

deleteAllStagiaire();

//On appelle les fonctions
//Première fonction pour lire le fichier et le mettre en table
$table = readFileToArray($filePath);

//Fonction pour créer le tableau associatif
$table = generateStagPlaces($postes, $table);

//fonction pour faire tableau multidimensionnel
$table = generateMulti($table);

$table = randomizePlacesStag($table);

//Fonction pour insérer dans la bdd
insertStagiaires($table);
header('Location: ../view/insertDone.php');


?>