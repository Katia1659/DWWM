<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

function calculplace (int $param1 ,int $param2 ) : int {
    return $param1 - $param2;
}

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;

$placeLibre = calculplace($nombre_places_parking, $nombres_voitures);
echo "nombre de place libre : $placeLibre";
