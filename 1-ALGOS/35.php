<?php 

/* 

Exercice 35 

Ecrivez un algorithme constituant un tableau, à partir de deux tableau de meme longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ. 

*/

// On déclare deux tableaux
$tab1 = array('4', '8', '7', '9', '1', '5', '4', '6');
$tab2 = array('7', '6', '5', '2', '1', '3', '7', '4');

// On remplit le troisième tableau avec la somme des valeurs des deux premiers tableaux. 
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
    echo $tab3[$i];
    echo "\n";
}