<?php

/* Exercice 22-B

Modifiez ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisi ce nombre. 

*/

// On admet que la variable position (qui correspond à la position de la valeur la plus grande) est initialisée à 1. 

$position = 1;

// On demande à l'utilisateur de saisir les 20 nombres. 

$nb = readline("Saisissez le nombre numéro 1 : ");
$pg = $nb;
for ($i=2; $i <= 20; $i++) {
    echo 'Saisissez le nombre numéro ';
    echo $i;
    $nb = readline(' : ');

// On détermine quel est le nombre le plus grand, ainsi que sa position dans la liste de valeurs saisies. 

    if ($nb > $pg) {
        $pg = $nb;
        $position = $i;
    }
}

// On affiche le plus grand et sa position dans le tableau. 
    echo 'Le nombre le plus grand est ';
    echo $pg; 
    echo "\n";
    echo 'Ce nombre a été saisi en ';
    echo $position;