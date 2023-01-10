<?php
/* 
Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a été préalablement saisi).
*/
$somme = 0;
for ($i=1; $i <= count($tableau) ; $i++) { 
    $somme = $somme + $tableau[$i];
}
?>