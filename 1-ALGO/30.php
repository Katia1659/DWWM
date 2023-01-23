<?php
/* Donner le résultat de la multiplication de deux nombres en ne faisant que des additions */

// Demande les deux nb a multiplier au user
$nbMultiple = readline ("Entrez un nombre :");
$nb = readline ("Entrez un nombre :");

//Acredite la var $Somme 
$somme = 0;

//              ↓ boucle avec $i < avec un des deux nb (l'un ou l'autre)
for ($i=1; $i <= $nbMultiple; $i++ ) {
    echo "$somme + $nb";
    echo "\n";
    $somme = $somme + $nb;
}

echo "La multiplication des deux nombres est de $somme";
?>