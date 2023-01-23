<?php 
/* Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a été préalablement saisi). 
*/

$tab=array() ;
$tab[0] = '1';
$tab[1] = '5';
$tab[2] = '10';
$tab[3] = '5';
$tab[4] = '3';
$tab[5] = '9';


$som=0;

for ($i=0; $i < count($tab) ; $i++) { 
    $som= $som+ $tab[$i];
    
}
echo $som;

?>