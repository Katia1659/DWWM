<?php
/* ecrivez un algorithme constituant un tableau, à partir de deux tableaux de meme longueur préalablement saisis. Le nouveaux tableau sera la somme des éléments des deux tableaux de départ

*/

//inititalisation des deux tableaux
$tab = array('1','2','3','4','5','6');
$tab2 = array('1','2','3','4','5','6');

//initilisation d'un 3eme tableau pour rentrer les résultats des deux tableaux précédents
$tab3 = array();


for ($i=0; $i < count($tab); $i++) { 
    $tab3[$i] = $tab[$i] + $tab2[$i];
    echo $tab3[$i];
    echo PHP_EOL;
}


