<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

// $nombre_places_parking = 42;
// $nombres_voitures = rand(0, $nombre_places_parking);

// echo "nombre_places_parking = $nombre_places_parking";
// echo PHP_EOL;
// echo "nombres_voitures = $nombres_voitures";
// echo PHP_EOL;

function showNbPlace(int $nbSpot, int $nbCars) {

return $nbSpot-$nbCars;

}

$nbSpot = 42;
$nbCars = rand(0,$nbSpot);
    
echo "nombre_places_parking = $nbSpot"."\n";

echo "nombres_voitures = $nbCars"."\n";
echo "nb_places_libres = ";
echo showNbPlace($nbSpot,$nbCars); 