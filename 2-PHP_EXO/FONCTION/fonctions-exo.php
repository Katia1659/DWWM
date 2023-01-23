<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;


//On créer la fonction
function parking(int $parking, int $voiture): string{
    if ($voiture >= $parking) {
       $place = "il n'y a plus de place";
    } else {
        $place = $parking - $voiture ;
    }
       
    return $place;
}

//On définit les valeurs et on appelle la fonction
echo parking($nombre_places_parking, $nombres_voitures);