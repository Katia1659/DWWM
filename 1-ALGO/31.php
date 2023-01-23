<?php
/*
Ecrire un algorithme qui déclare et remplisse un tableau contenant
les six voyelles de l'al habet latin.
*/

// création d'un tableau simple vide
$tableau = array();

// ajout d'éléments dans le tableau
$tableau[1] = 'a';
$tableau[2] = 'e';
$tableau[3] = 'i';
$tableau[4] = 'o';
$tableau[5] = 'u';
$tableau[6] = 'y';

// lecture des éléments du tableau
for ($i=0; $i < 7; $i++) { 
    echo $tableau[$i];
    echo "\n";

}

?>
