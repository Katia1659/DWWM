<?php
/*Ecrire un algorithme triant un tableau par
on cherche l'élément de plus petite valeur dans le tableau
le placer en tête du tableau
recommencer avec le tableau moins la première case

On effectue donc un tri en bulle.
*/

$tab = array(14,3,9,2,5 );

$pos = '';
$min = '';
$temp = '';


for ($i=0; $i < sizeof($tab); $i++) { 
    $min = $tab[$i];
        for ($j=$i+1; $j < sizeof($tab); $j++) { 
            if ($tab[$j] < $min ) {
                $min = $tab[$j];
                $pos = $j;
            }
        }
    if ($min < $tab[$i]) {
        $tab[$pos] = $tab[$i];
        $tab[$i] = $min;
    }
}
for ($i=0; $i < sizeof($tab); $i++) { 
    echo $tab[$i].' | ' ;
}












?>