<?php
/*
soit un tableau T a deux dimension (12, 8) prealablement remplis de valeurs numerique. ecrire un algo qui recherche la plus grande des valeurs
au sein des tableau
*/

$nbGrand = '';

// creation du tableau a double dimension
$tableau = array(
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 9, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8),

);

// creation des boucles
for ($i = 0; $i < count($tableau); $i++) {
    $ligne = $tableau[$i];
    for ($j  = 0; $j < count($ligne); $j++) {
        if ($ligne[$j] > $nbGrand){
            $nbGrand = $ligne[$j];
        }
        echo $ligne[$j];
        echo '-';
    }
    echo PHP_EOL;
}
echo "\n";
echo 'la valeur la plus grand du tableau et '. $nbGrand;
?>