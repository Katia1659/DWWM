<?php

/* 
ecrivez un algorithme constituant un tableau, à partir de deux tableau de meme longueur prealablement saisis. 
Le nouveau tableau sera la somme des elements des deux tableaux de depart.
*/

//declaration des tableaux
$tab1 = array();
$tab2 = array();
$tab3 = array();

// remplissage du tab1
$tab1 [0] = 4;
$tab1 [1] = 8;
$tab1 [2] = 7;
$tab1 [3] = 9;
$tab1 [4] = 1;
$tab1 [5] = 5;
$tab1 [6] = 4;
$tab1 [7] = 6;

// remplissage du tab2
$tab2 [0] = 7;
$tab2 [1] = 6;
$tab2 [2] = 5;
$tab2 [3] = 2;
$tab2 [4] = 1;
$tab2 [5] = 3;
$tab2 [6] = 7;
$tab2 [7] = 4;


// remplissage du tab3

for ($i=0; $i <= 7 ; $i++) { 
    
   $tab3 [$i] = $tab1[$i] + $tab2 [$i]; 

}


// affichage tab3


for ($i=0; $i <= 7 ; $i++) { 
    echo $tab3[$i]."|";
}

?>