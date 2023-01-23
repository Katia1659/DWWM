<?php
/*Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.
*/


// On déclare les tableau
$tab = array ('D','E','C','A','L','A','G','E') ;
$tabm = [];

//On procéde au décalage
for ($i=0; $i < 8; $i++) { 
    $tabm[$i] = $tab[$i + 1];
    if ($i == 7) {
        $tabm[7] = $tab[0] ;
    } 
}

//on affiche le nouveau tableau
for ($i=0; $i < 8; $i++) { 
    echo $tabm[$i];
}

//print_r($tabm);
?>