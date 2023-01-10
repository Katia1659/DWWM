<?php
/* Soit un tableaux à deux dimension (12, 8) préalablement rempli de valeurs numériques.
Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.
*/

//On rentre les valeurs du tableau
//$tab =  array (array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23),array(53,96,8,5,54,45,45,85,18,95,15,23));

//on rentre les valeurs du tableaux bidemensionnel (autre méthode)

//on initialise un conteur
$ct = 0 ;
 for ($i=0; $i < 12; $i++) { 
    
     for ($j=0; $j < 8; $j++) { 
         $tab[$i][$j] = $ct ;
         $ct = $ct + 1 ;
     }
 }

//on déclare une valeur max temp
$max = $tab [0][0] ;

//On chercher la plus grande valeur et on l'affiche
for ($i=0; $i < 12; $i++) { 
    for ($j=0; $j < 8; $j++) { 
        if ($tab[$i][$j] > $max) {
            $max = $tab [$i][$j] ;
        }
    }
}

echo $max ;

//print_r($tab);
?>