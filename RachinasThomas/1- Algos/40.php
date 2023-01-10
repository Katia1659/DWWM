<?php

/* 

Soit un tableau T a deux dimensions (12,8), prealablement rempli de valeurs numerique. 
ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau
*/


// creation tableau a 2 dimensions
$tableau = array(
    array('56', '6', '9', '54','4', '6', '8','8'),
    array('15', '12', '45', '65', '12','95', '7', '45'),
    array('70', '89', '12', '45', '5', '23', '22', '56'),
    array('23', '4','5','6', '6', '3', '9','45'),
    array('7', '8', '6', '4', '6', '2', '3', '7'),
    array('8', '6', '5', '45', '85', '3', '0', '1'),
    array('2', '0', '4', '7', '4', '6', '30', '32'),
    array('15', '12', '45', '65', '12','95', '7', '45'),
    array('70', '89', '12', '45', '5', '23', '22', '56'),
    array('8', '6', '5', '45', '85', '3', '0', '1'),
    array('56', '6', '9', '54','4', '6', '8','8'),
    array('23', '4','5','6', '6', '3', '9','45'),

);

// initialisation variables

$pg = 0;

// boucle qui cherche le plus grand en parcourant tout les tableaux
for ($i=0; $i < count($tableau) ; $i++) {

    for ($j=0; $j < count($tableau[$i]); $j++) { 

        if ($tableau[$i][$j] > $pg) {
            $pg = $tableau[$i][$j];
        }
    }
}

echo $pg;
?>

