<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction
function place_restante(int $nb1, int $nb2): string{
    $res = $nb1 - $nb2;
    if ($res > 0) {
        return "Il reste $res place(s) disponible.";
    }else{
        return "Il ni a plus de place disponible";
    }
    
}
$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);



// echo "nombre_places_parking = $nombre_places_parking";
// echo PHP_EOL;
// echo "nombres_voitures = $nombres_voitures";
// echo PHP_EOL;

echo place_restante($nombre_places_parking,$nombres_voitures);