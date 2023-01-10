<?php
/*Soit un tableau T à deux dimensions (12,8) préalablement rempli de valeurs numériques. Ecrire un algorithme qui recherche la plus grande valeurs numérique. Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau 

*/
$pg=0;

//Initialisation du tableau
$tableau = array(
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(45, 8, 2, 11, 45, 17, 78, 56),
    array(91, 42, 13, 454, 25, 66, 47, 28),
    array(15, 21, 35, 41, 55, 68, 77, 48),
    array(41, 21, 23, 14, 5, 46, 7, 56),
    array(16, 26, 263, 104, 55, 61, 47, 86),
    array(31, 42, 43, 48, 54, 56, 27, 83),
    array(15, 42, 63, 46, 45, 56, 67, 18),
    array(51, 82, 43, 64, 35, 86, 72, 81),
    array(47, 52, 23, 84, 65, 46, 57, 58),
    array(11, 27, 38, 41, 54, 65, 87, 78),
    array(5, 87, 14, 36, 15, 47, 17, 9),
);

//parcourir le tableau pour trouver la plus grande valeur
for ($i=0; $i <= count($tableau); $i++) { 
    for ($j=0; $j <=$i ; $j++) { 
        if ($tableau[$i][$j]>$pg) {
        
        $pg = $tableau[$i][$j];
        }
        
    
    }
}

echo $pg;
