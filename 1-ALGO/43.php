<?php
/*Ecrire un algorithme qui permet d'inverser un tableau.*/

$tab = array ("A", "B", "C", "D", "E", "F", "G", "H");
$temp = 0;
$j =0;

for ($i = 1; $i < count ($tab); $i++) {
    $temp = $tab [0];
    for ($j= 0; $j <= $i ; $j++) {
        $temp = $tab [$i];
        $tab [$i] = $tab [$j];
        $tab [$j] = $temp;
    }
    
    
}

for ($i = 0; $i < count ($tab); $i++) {
echo "$tab[$i] | ";
}

?>