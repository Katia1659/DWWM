<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction


$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);


function resteplace ( int $nbrVoiture , int $placesMaxVoiture = 42 )  {
    $restePlaces = $placesMaxVoiture - $nbrVoiture;
    return $restePlaces;
}

echo resteplace( $nombres_voitures, $nombre_places_parking );


