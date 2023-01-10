<?php
/* 
Soit un tableau T à deux dimensions (12,8) préalablement rempli de va leurs numériques. 
Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.
 */

echo 'Début';
echo PHP_EOL;
$pgValeur = 0;

$tab = array(
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 64, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(1, 2, 3, 4, 5, 6, 7, 8),

);

// Nous devons mettre sizeof($tab[$i]) pour le second pour rentrer dans le tableau. Sinon la taille de l'horizontal sera égale a la taille de la verticale.

for ($i = 0; $i < sizeof($tab); $i++) {
    for ($j = 0; $j < sizeof($tab[$i]); $j++) {
        if ($tab[$i][$j] > $pgValeur) {
            $pgValeur = $tab[$i][$j];
        }
    }
}

echo 'la valeur la plus grande du tableau est : ' . $pgValeur;
