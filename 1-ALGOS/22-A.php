<?php

/* Exercice 22-A

Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres. 

*/


// On admet que le plus grand est au tout départ égal à 1.

$pg = 1;

// On demande à l'utilisateur de saisir 20 nombres. 

for ($i=1; $i <= 20; $i++) {
    echo 'Saisissez le nombre numéro ';
    echo $i;
    $nb = readline(' : ');

    // On détermine quelle valeur est la plus grande dans celles qui ont été saisies. 

    if ($nb > $pg) {
    $pg = $nb;
}
}

// On affiche le nombre le plus grand

    echo 'Le nombre le plus grand est ';
    echo $pg; 