<?php

/* 

Exercice 43 

Ecrire un algorithme qui permet d'inverser un tableau 

*/

// On déclare un tableau 

$tab = array(20, 15, 17, 2, 3, 5, 8, 10);

// On échange les valeurs du tableau en partant des extrémités, et en allant vers l'intérieur. On commence par inverser la dernière valeur avec la première, l'avant dernière avec la deuxième et ainsi de suite. 

for ($i = 0; $i < (sizeof($tab) - 1) / 2; $i++) {

            $temp = $tab[$i];
            $tab[$i] = $tab[sizeof($tab)-1-$i];
            $tab[sizeof($tab) - 1 - $i] = $temp;
    }

// On affiche le nouveau tableau avec les valeurs inversées. 

for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i]. ' ';
}