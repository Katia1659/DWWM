<?php
/*Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur.
*/

$tab = array() ;

for ($i=0; $i < 9; $i++) { 
    $tab [$i] = readline('entrer la valeur à l index' . $i . ': ') ;
}
?>