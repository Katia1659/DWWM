<?php

/* Exercice 36 

Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf  des deux tableaux. Pour calculer le schtroumpf, il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. 

*/


// On déclare la variable schtroumpf; et deux tableaux dont on saisit les valeurs.


$schtroumpf = 0;

$tab1 = array('2', '5','8','4');
$tab2 = array('6','7');

// On crée une boucle, puis une boucle imbriquée dans la première afin de parcourir les différents tableaux. On calcule ainsi le produit des éléments du tableau 1 avec les éléments du tableau 2, et on les additionne.


for ($i = 0; $i < count($tab1); $i++) {
    for ($j = 0; $j < count($tab2); $j++) {
         $schtroumpf += ($tab1[$i] * $tab2[$j]);
        
    }
    
}

// On affiche l'addition de tous les produits effectués. 

echo $schtroumpf;