<?php
/*
Toujours à partir de deux tableaux précédemment saisis, écrivez
un algorithme qui calcule le schtroumpf des deux tableaux. Pour
calculer le schtroumpf, il faut multiplier chaque élément du
tableau I par chaque élément du tableau 2, et additionner le tout.
Par exemple si l'on a :
tab 1 :                     2|5|8|4
Tableau 2 :                 6|7
Le Schtroumpf sera : 6*2+6*5+6*8+6*4+7*2+7*5+7*8+7*4 = 247
*/

$schtroumpf= 0 ;
//on crée le premier tableau 
$tab1 = array();
$tab1[0] = 2;
$tab1[1] = 5;
$tab1[2] = 8;
$tab1[3] = 4; 

//on crée le deuxieme tableau
$tab2 = array();
$tab2[0] = 6;
$tab2[1] = 7;

// on crée un boucle for pour les 4 valeurs du tableau 1
for ($i=0; $i < 4 ; $i++) { 
    // on crée une autre boucle dans la premiere boucle for pour les 2 valeurs du tableau 2
    for ($j=0; $j < 2; $j++) { 
        $schtroumpf= $schtroumpf + ($tab1[$i])*($tab2[$j]);
    }
} 
echo $schtroumpf;
?>