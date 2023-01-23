<?php
/*
Ecrivez un algorithme constituant un tableau, à partir de deux
tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.
*/

//on crée le premier tableau
$tab1 = array();
$tab1[0] = 4 ;
$tab1[1] = 8 ;
$tab1[2] = 7 ;
$tab1[3] = 9 ;
$tab1[4] = 1 ;
$tab1[5] = 5 ;
$tab1[6] = 4 ;
$tab1[7] = 6 ;

//on crée le deuxieme tableau
$tab2 = array();
$tab2[0] = 7 ;
$tab2[1] = 6 ;
$tab2[2] = 5 ;
$tab2[3] = 2 ;
$tab2[4] = 1 ;
$tab2[5] = 3 ;
$tab2[6] = 7 ;
$tab2[7] = 4 ;

// on crée le 3eme tableau mais on ne rentre aucune valeurs pour l'instant

$tab3 = array();
// on crée la boulcle qui remplira le troisieme tableau avec la somme des 2 precedants
for ($i=0; $i <8 ; $i++) { 
   $tab3[$i] = $tab1[$i] + $tab2[$i] ;
   //pour verification 
   echo $tab3[$i]."|";
}

?>