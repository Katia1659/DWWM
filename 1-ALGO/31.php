<?php
/* Ecrire un algorithme qui déclare et remplisse un tableau contenant les six voyelles de l'alphabet latin. */
//Creation du tableau
$tableau = array ();

// Remplissage du tableau
$tableau [0] = 'A';
$tableau [1] = 'E';
$tableau [2] = 'I';
$tableau [3] = 'O';
$tableau [4] = 'U';
$tableau [5] = 'Y';

//Lecture du tableau
for ($i=0; $i<= 5; $i++) {
    echo $tableau [$i];
    echo "\n";
}
?>