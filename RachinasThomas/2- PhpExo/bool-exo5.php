<?php

/*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

*/

// declaration variables
$carte_fidelite = true;
$demande = 4;

$places_normales = rand(0, 10);
$places_carte_fidelite = rand(0, 5);

echo "carte_fidelite: $carte_fidelite\n";
echo "demande: $demande\n";
echo "places_normales: $places_normales\n";
echo "places_carte_fidelite: $places_carte_fidelite\n";


switch ($carte_fidelite) {
    case $demande <= $places_carte_fidelite:
    case $demande <= $places_normales:
    case  false && !$demande <= $places_normales:
        echo "la réservation est enregistrée\n";      
    break;
    
    default :
        echo "il n'y a pas assez de places\n";  
    break;
}

