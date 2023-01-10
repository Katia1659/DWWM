<?php
/*
• Ecrivez un algorithme constituant un tableau, à partir de deux
tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.
*/

$i = 0;
// création d'un tableau simple
$tableauUn = array(4, 8, 7, 9, 1, 5, 4, 6);
$tableauDeux = array(7, 6, 5, 2, 1, 3, 7, 4);
$tableauTrois = array();
for ($i=0; $i < 8 ; $i++) { 
    $tableauTrois[$i] = $tableauUn[$i] + $tableauDeux[$i];
    echo "\n";
    echo $tableauTrois[$i];
}
?>
