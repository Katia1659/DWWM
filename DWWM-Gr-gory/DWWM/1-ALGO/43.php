<?php
// Ecrire un algorithme qui permet d'inverser un tableau.

// on entre un tableau et ses valeurs et on initialise les variabes
$tab = array(12,25,1,24,13,64,12);
$temp = '';
$j = sizeof($tab)-1;

// boucle pour inverser les valeurs
for ($i=0; $i < sizeof($tab)/2 /* (sizeof($tab)/2) ou $j */ ; $i++) { 
    $temp = $tab[$i];
    $tab[$i] = $tab[$j];
    $tab[$j] = $temp;
    $j--;
}

//boucle pour l'affichage
for ($i=0; $i < sizeof($tab) ; $i++) {
    echo $tab[$i].' | ';
}

?>