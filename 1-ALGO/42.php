<?php
/*Ecrire un algorithme triant un tableau
On cherche l'élément de plus petite valeur dans le tableau
Le placer en tête du tableau
Recommencer avec le tableau moins la première case
*/

$tab = array (14, 3, 9, 2, 5);

for ($i=0; $i < 4; $i++) { 
    $min = $i ;
    for ($j = ($i + 1); $j < 5; $j++) { 
        if ($tab[$j] < $tab[$min]) {
            $min = $j ;
        }
    }
    if ($min != $i) {
        $temp = $tab[$i];
        $tab[$i] = $tab[$min];
        $tab[$min] = $temp ;
    }
}

print_r($tab);

//tri à bulle
// $permut = 1 ;
// while ($permut == 1) {
//     $permut = 0 ;
//     for ($i=0; $i < 4; $i++) { 
//         if ($tab[$i] > $tab[$i + 1]) {
//             $temp = $tab[$i] ;
//             $tab[$i] = $tab[$i + 1] ;
//             $tab[$i + 1] = $temp ;
//             $permut = 1 ;
//         }
// }
// }  

?>