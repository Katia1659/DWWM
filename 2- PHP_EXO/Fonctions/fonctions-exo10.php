<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction
//On définit la fonction
function places_libres(int $n1, int $n2):int{
    return $n1-$n2;
}
//On définit les variables
$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

//On renvoie la fonction
echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;
echo "Il reste donc ".places_libres($nombre_places_parking,$nombres_voitures)." places libres";
?>