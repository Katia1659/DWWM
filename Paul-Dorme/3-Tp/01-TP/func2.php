<?php 

// Fonction à réaliser : 
// function generateStagPlaces(array $listStag, array $listPlaces) : array [k,v];



function generateStagPlaces(array $listStag, array $listPlaces) {

return array_combine ($listPlaces, $listStag);
    
}

$listStag = array ('Kaouthar','Lucas','Sebastien','Jakub','Anthony','Alexandre','Jean-Batiste','Gregory','Julien','Thomas','Thibaut','Maksen','Florian','Paul','Batiste','Mounir');
$listPlaces = array  ('Places_1','Places_2','Places_3','Places_4','Places_5','Places_6','Places_7','Places_8','Places_9','Places_10','Places_11','Places_12','Places_13','Places_14','Places_15','Places_16');

print_r($placesStag = array_combine($listPlaces, $listStag));