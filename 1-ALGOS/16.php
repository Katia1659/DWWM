<?php

/* Exercice 16

Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).

*/

// On demande un nombre à l'utilisateur

$nb = readline ('Saisissez un premier nombre : ');


// On affiche si le nombre est positif, négatif ou égal à 0

if ($nb > 0 ) {
    echo 'Le nombre est positif';
} 

elseif ($nb < 0 ) {
    echo 'Le nombre est négatif';
}

else {
    echo 'Le nombre est nul';
}

