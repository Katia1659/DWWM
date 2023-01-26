<?php
/*
Ecrire un algorithme triant un tableau par
- on cherche l'élément de plus petite valeur dans le tableau
- le placer en tête du tableau 
- recommencer avec le tableau moins la première case
*/
$pos = '';
$min = '';
$temp = '';
// on entre un tableau et ses valeurs
$tab = array(14,3,8,45,12,258,3,45,9,2,5);


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