<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking


function calc_place_patking (int $nbrPlace ,int $nbrVoiture ): int {

return $nbrPlace - $nbrVoiture;

}


// Affichez dans la console le résultat renvoyé par la fonction

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

$nombre_places_parking= calc_place_patking($nombre_places_parking,$nombres_voitures);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;

?>