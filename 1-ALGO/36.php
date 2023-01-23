<?php
/* Toujours à partir de deux tableaux précedemment saisis, écrivez un alogorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le 
schtroumpf, il faut multiplier chaques élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. */

// Création des deux premier tableaux et incrémentation
$tableau1 = array (2, 5, 8, 4);
$tableau2 = array (6, 7);

// Incrémentation des variables
$multi = 0;
$somme = 0;
$i = 0 ;

// Boucle pour *tab2 (0)
for ($i = 0; $i<= 3; $i++) {
$multi = $tableau1[$i] *$tableau2 [0];
$somme += $multi ;
}
// Boucle pour *tab2 (1)
for ($i = 0; $i<= 3; $i++) {
    $multi = $tableau1[$i] *$tableau2 [1];
    $somme += $multi ;
    }
    echo "Les multiplication puis les sommes donne loe résultat de $somme";
?>