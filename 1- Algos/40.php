<?php
/*
Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. Ecrire un algorithme qui recherche la plus
grande valeur au sein de ce tableau.
*/


$vMax = 0;
//on declare notre tableau
$tab = array(
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
    array(),
);

// on cree un algo qui genere des valeurs pour un tableau a deux dimension
for ($i=0; $i <12 ; $i++) { 
    for ($j=0; $j <8 ; $j++) { 
        $tab[$i][$j] = $i.$j;
    }
}

//on recherche la plus grande valeur
for ($i=0; $i <12 ; $i++) { 
    for ($j=0; $j <8 ; $j++) { 
        if ($tab[$i][$j] > $vMax) {
            $vMax = $tab[$i][$j];
        }
    }
}
// on affiche la valeur max
echo $vMax;
?>