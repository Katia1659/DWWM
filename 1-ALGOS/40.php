<?php

/* 

Exercice 40 

Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.

*/


// On initialise la variable pg qui est le plus grand nombre du tableau, à 0.

$pg = 0;

// On crée un tableau bidimensionnel appelé $t.

$t = array(
    array(1, 2, 3, 4, 5, 108, 7, 8),
    array( 1, 2, 3, 4, 5, 6, 7, 8),
    array( 1, 2, 3, 4, 5, 6, 7, 8),
    array( 1, 2, 59, 4, 5, 6, 7, 8),
    array( 1, 2, 3, 4, 5, 145, 7, 8),
    array( 1, 2, 3, 4, 5, 6, 7, 8),
    array( 1, 2, 3, 4, 5, 6, 7, 8),
    array( 1, 2, 3, 77, 5, 6, 7, 8),
    array( 1, 2, 3, 4, 5, 64, 7, 8),
    array( 1, 2, 3, 4, 5, 6, 7, 8),
    array( 1, 2, 3, 82, 5, 6, 98, 8),
    array( 1, 2, 3, 4, 5, 79, 7, 8)

);

// On fait une boucle, et une boucle qui parcourt la première afin de trouver le plus grand nombre du tableau.

for ($i = 0; $i < sizeof($t); $i++) {
    for ($j = 0; $j < sizeof($t[$i]); $j++) {
        if ($t[$i][$j] > $pg) {
            $pg = $t[$i][$j];
        }
    }
}

// On affiche le plus grand nombre du tableau. 

echo $pg; 



