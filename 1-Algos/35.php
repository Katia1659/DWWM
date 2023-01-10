<?php
/*Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis. 
Le nouveau tableau sera la somme des éléments des deux tableaux de départ.
*/

//On déclare les 3 tableaux et les valeurs des deux premiers
$tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
$tab3 = array();

//On remplit le troisième tableau
for ($i=0; $i < 8; $i++) { 
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// affichage du  3e tableau
for ($i=0; $i < 8 ; $i++) { 
    echo $tab3[$i];
    echo "\n";
}
?>