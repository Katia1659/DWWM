<?php
/*Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs.
 Toutes les valeurs doivent être en suite augmentés de 1 et le nouveau tableau sera affiché à l'écran.
*/

$nb = readline('indiquer le nombre de valeurs dans le tableau: ');
$tab = [];

//on rentre les valeurs du tableau
for ($i=0; $i < $nb; $i++) { 
    $tab [$i] = readline('entrer la valeur à l index ' . $i . ': ') ;
}

//on augmente les valeurs du tableau de 1 et on l'affiche
for ($i=0; $i < $nb; $i++) { 
    $tab [$i] = $tab[$i] + 1 ;
    echo $tab[$i];
    echo "\n" ;
}
?>