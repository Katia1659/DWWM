<?php

//Fonction à réaliser :
//function randomizePlacesStag(array [k,v] $listStagPlaces) : array [k,v];

include 'func2.php';

function randomizePlaceStag(array $listStag, array $listPlaces) : array {

 

return array_combine($listPlaces,$listStag);
}


// Attribu une nouvelle place à chaque personne
$Shuffle = shuffle($listStag);
print_r($newPlacesStag = array_combine($listPlaces,$listStag));