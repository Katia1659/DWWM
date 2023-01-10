<?php

/*
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
Var A, B : Entier; 
Debut
    A <- 5 
    B <- A + 4
    A <- A + 1
    B <- A - 4 
Fin

1 A <- 5   B <- ?
2 A <- 5   B <- 9
3 A <- 6   B <- 9
4 A <- 6   B <- 2
*/

// affecter des valeurs aux variables

$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;

// afficher les variables

echo "Debut";
echo "\n";

echo $a; 
echo "\n";

echo $b;
echo "\n";

echo "Fin";

?>