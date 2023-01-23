<?php
/*Soit un tableau T à deux dimensions (12, 8) préalablement rempli
de valeurs numériques. Ecrire un algorithme qui recherche la plus
grande valeur au sein de ce tableau.

*/

//On définie le tableau et les variables
$tab = array( );
$c2 = 10;
$max = 0;

//On crée le tableau de 12x8
for ($i=0; $i <12 ; $i++) { 
    for ($j=0; $j <8 ; $j++) { 
        $c2 = random_int(10,99);
        $tab[$i][$j] = $c2;          
    }
}

//On affiche le tableau (facultatif)
for ($i=0; $i <12 ; $i++) { 
    for ($j=0; $j < 8; $j++) { 
        if ($j<7) {
            echo $tab[$i][$j].' | ';
        }else {
            echo $tab[$i][$j].' | '."\n";

        }
    }
}

//On trouve la valeur max de ce tableau
for ($i=0; $i < 12; $i++) { 
    for ($j=0; $j < 8; $j++) { 
        if ($tab[$i][$j]>$max) {
            $max = $tab[$i][$j];
        }else {
            $max = $max;
        }
        
    }
}

//On affiche la valeur max de ce tableau
echo "\n".'Le plus grand nombre de ce tableau est  '.$max;


?>

