<?php
/*Ecrire un algorithme qui permet d'inverser un tableau.

*/

$tab = array(5,9,6,1,4,3);
$j = count($tab);
$temp = '';

for ($i=0; $i < $j ; $i++) { 
    $temp = $tab[$i];
    $tab[$i] = $tab[$j];
    $tab[$j] = $temp;
    $j -= 1;    
}


for ($i=0; $i < count($tab) ; $i++) { 
    echo $tab[$i].' | ';
}










?>



