<?php

/*
Toujours à partir de 2 tableaux précédement saisis, écrivez un algorithme qui calcule les schtroumpf des deux tableaux.
Pour calculer le schtroumpf, il faut multiplier chaque elements du tableau 1 par chaque éléments du tableau 2, et additionner le tout.
Par exemple si l'on a : 

tab1 2 | 5 | 8 | 4 

tab2 6 | 7 

le schtroumpf sera : 
6*2 + 6*5 + 6+8 + 6*4 + 7*2 + 7*8 + 7*4 = 247




*/

//affecter valeur a la variable
$schtroumpf = 0;

//creaion tableau
$tab1 = array('2', '5', '8','4');
$tab2 = array('6', '7');


//Calcule du schtroumpf

for ($i=0; $i <= 3 ; $i++) { 
   
    for ($j=0; $j <= 1 ; $j++) { 
        
        $schtroumpf = $schtroumpf + ( $tab1[$i] * $tab2[$j]);
    }
}

echo $schtroumpf; 

?>

