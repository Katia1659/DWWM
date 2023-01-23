<?php

/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côte le cas où le nombre vaut zéro).

*/

// On demande à l'utilisateur de saisir un nombre

$nb = readline ('Saisissez un nombre : '); 

// On affiche si le nombre saisi est positif ou négatif. 

if($nb > 0) {
    echo 'Le nombre est positif';
} else {
    echo 'Le nombre est négatif';
}

