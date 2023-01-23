<?php
/*Toujours à partir de deux tableaux précédemment saisis écrivez un algorithme qui calcule le schtoumpf, 
il faut multiplier chaque élément du tableau par chaque élément du tableau 2, et additionner le tout.
*/

//On déclare les 2 tableaux et leurs valeurs et on initialise le schtroumpf
$tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
$schtroumpf = 0 ;

//On calcule le schtroumpf
for ($i=0; $i < 8; $i++) { 
    for ($j=0; $j < 8; $j++) { 
        $schtroumpf = (($tab1[$i] * $tab2[$j]) + $schtroumpf );
    }
}

echo $schtroumpf ;
?>