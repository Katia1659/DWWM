<?php
/* Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. Ecrire un algorithme qui recherche la plus grande
valeur au sein de ce tableau. */

// Création du tableau en deux dimensions
$tableau = array (
    array(1, 72, 4, 7, 99, 5, 8, 14, 13, 8, 56, 6),
    array(3, 2, 6, 7, 47, 5, 8, 4, 19, 2, 7, 4),
    array(1, 3, 4, 2, 7, 99, 5, 8, 14, 13, 8, 14),
    array(1, 4, 12, 7, 205, 8, 8, 14, 13, 8, 5, 80),
    array(1, 2, 4, 7, 26, 5, 8, 14, 13, 8, 5, 75),
    array(1, 9, 4, 7, 79, 5, 8, 14, 13, 8, 5, 65),
    array(12, 2, 4, 7, 23, 74, 8, 14, 13, 8, 5, 44),
    array(18, 2, 4, 7, 17, 5, 8, 1, 13, 8, 5, 54),
);

// initialisation des variables
$pg = 0;
$i = 0;
$j = 0;

// Boucle pour parcourir le $i (vertical) puis une autre pour parcourir $j(horizontal)
for ($i= 0; $i < count ($tableau); $i++) {
    $ligne = $tableau [$i];
    for ($j = 0; $j < count ($ligne); $j++)
    if ($pg < $tableau [$i] [$j]) {
        $pg = $tableau [$i] [$j];
}
}

echo "Le nombre le plus élevé est $pg";
//print_r($tableau);
?>