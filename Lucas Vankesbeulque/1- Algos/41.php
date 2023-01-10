<?php

/*Ecrire l'algorithme effectuant le décalage des éléments d'un tableau 

*/

$tab= array('D','E','C','A','L','A','G','E');

// boucle décalage:


    for ($j=1; $j <count($tab) ; $j++) { 

        $pg= $tab[$j-1] ;
        $tab[$j-1]=$tab[$j];
        $tab[$j]= $pg;

    }
// boucle affichage:
    for ($i=0; $i < count($tab) ; $i++) { 
        echo "-".$tab[$i];
    }


