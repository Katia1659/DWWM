<?php
/*Ecrire un algorithme qui permet d'inverser un tableau.
*/

//on définit les tableau et on initialise les valeurs
$tab = array (14, 3, 9, 2, 5);
$long = 4 ;

//On inverse les valeurs
for ($i=0; $i < 5; $i++) { 
    if ($i < ($long - $i)) { //ici on conditionne pour pas qu'il réinverse le tableau dans l'autre sens.         
        $temp = $tab[$i] ;
        $tab[$i] = $tab[$long-$i] ;
        $tab[$long-$i] = $temp ;
    }
}

//on affiche le nouveau tableau
for ($i=0; $i < 5; $i++) { 
    echo $tab[$i];
    echo "\n";
}
?>