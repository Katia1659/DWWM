<?php

include('../modele/functions.php');

//creation tableau listPlaces
$listPlaces = array();
for ($i = 1; $i <= 16; $i++) {
    $listPlaces[$i] = 'Place_'.$i;
}

//creation tableau listStag
$listStag = readFileToArray('../modele/listStag.txt');

//creation tableau combiné
$combine = generateStagPlaces($listPlaces, $listStag);

//creation tableau combine
//$melange = randomizePlacesStag($combine);

// appel de la commande pour sauvegarder 
//saveListStagToFile($melange);

//commande pour save json
//saveListStagToJson($melange);

//commande pour melanger le json
$test2 = placesStagRotate('../modele/Backup.json');
print_r($test2);
// $json_data = file_get_contents('../modele/Backup.json');
// $tab = json_decode($json_data, true);