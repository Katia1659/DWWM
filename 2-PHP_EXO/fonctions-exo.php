<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

/*

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

function places_libres (int $nbParking, int $nbVoitures) : int {
    return $nbParking - $nbVoitures;
    
};



echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;
echo places_libres($nombre_places_parking, $nombres_voitures);

*/



// ce script manipule une chaîne de caractère avec la fonction `substr()`
// la fonction `substr()` permet d'extraire une portion d'une chaîne de caractères

$texte = 'abcdefgh';

echo substr($texte, 0, 1);
echo PHP_EOL;

echo substr($texte, 0, 4);
echo PHP_EOL;

echo substr($texte, 4, 2);
echo PHP_EOL;

echo '"' . substr($texte, 9, 1) . '"';
echo PHP_EOL;

echo '"' . substr($texte, 0, 100) . '"';
echo PHP_EOL;

echo substr($texte, 0);
echo PHP_EOL;

echo substr($texte, -1, 1);
echo PHP_EOL;

echo substr($texte, -2, 2);
echo PHP_EOL;