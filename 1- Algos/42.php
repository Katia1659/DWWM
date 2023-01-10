<?php
/*
ecrire un algorithme triant un tableau
*/

//creation du tableau
$tabs = array(14, 3, 9, 2, 5);

//creation des boucles
for ($i=0; $i < sizeof($tabs) ; $i++) { 
    $min = $i;
    for ($j=$i+1; $j < sizeof($tabs) ; $j++) { 
        if($tabs[$j] < $tabs[$min]){
            $min = $j;
        }
    }
    if ($i != $min) {

        $temps = $tabs[$min];
        $tabs[$min] = $tabs[$i];
        $tabs[$i]= $temps;
    }
}
for ($i=0; $i < sizeof($tabs); $i++) {
    echo $tabs[$i];
}
?>