<?php
include('../modele/functions.php');

// lecture du nouveau fichier
$chemin= $_FILES['file']['tmp_name'];
$text = readFileToArray($chemin);

//creation tableau listPlaces
$listPlaces = array();
for ($i = 1; $i <= 16; $i++) {
    $listPlaces[$i] = 'Place_'.$i;
}

//creation du tableau combiné
$combine = generateStagPlaces($listPlaces, $text);

//melange des places
$melange = randomizePlacesStag($combine);

//commande pour save json
saveListStagToJson($melange);

session_start();
$_SESSION['nomsStag'] = placesStagRotate('../modele/Backup.json');
header('Location:../view/classe.php');