<?php 
/*
Ecrivez un algorithme calculant la somme des valeurs d'un tableau
(on suppose que le tableau a été préalablement saisi).
*/

//creation des tableaux
$tableau = array(); 

     $tableau[1] = 1;
     $tableau[2] = 2;
     $tableau[3] = 3;
     $tableau[4] = 4;
     $tableau[5] = 5;
     $tableau[6] = 6;
     $tableau[7] = 7;
     $tableau[8] = 8;
     $tableau[9] = 9;

$somme = 0;

     for ($i=0; $i < 9; $i++) { 

        $somme = $somme + $tableau[$i];
        
     }
     echo $somme;
?>