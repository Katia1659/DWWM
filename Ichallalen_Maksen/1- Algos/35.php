<?php
/*Ecrivez un algorithme constituant un tableau, à partir de deux
tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.

*/
//On déclare les tableaux
$tab1 = array( );
$tab2 = array( );
$tab3 = array( );
//On remplie les tableaux
for ($i=1; $i < 6; $i++) { 
    $c1 += 1;
    $c2 += 4;
    $tab1[$i] = $c1;
    $tab2[$i] = $c2;
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
//On affiche les tableaux
for ($i=1; $i <6 ; $i++) { 
    echo $tab1[$i].'  +  '.$tab2[$i].'  =  '.$tab3[$i].' '."\n";
}


?>