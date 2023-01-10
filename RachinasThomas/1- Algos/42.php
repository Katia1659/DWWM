<?php

/*
Ecrire un algorithme triant un tableau 
- on cherche l'element de plus petite valeur dans le tableau 
- le placer en tete du tableau 
- recommencer avec le tableau moins la premiere case 
*/

// declaration du tableau
$tab = array(14, 3, 9, 2, 5);

//boucle permettant de chercher le plus petit nombre 
//et de le deplacer 

for ($i=0; $i < count($tab) ; $i++) { 
    $temp = $i;

    for ($j=$i + 1; $j < count($tab) ; $j++) {
        if ($tab[$j] < $tab[$temp]) {
           $temp = $j;
        }
    }

    if ($temp != $i) {
        $temp2 = $tab[$temp];
        $tab[$temp] = $tab[$i];
        $tab[$i] = $temp2;
    }
}

//affichage du tableau

for ($i=0; $i < count($tab); $i++) {
    echo $tab[$i]."|";
}

?>