<?php

/*
Quelles sont les valeurs des variables A, B et C après exécution des instructions suivantes ?
Var A, B, C : Entier; 
Debut
    A <- 5 
    B <- 3 
    C <- A + B
    A <- 2
    C <- B - A
Fin

1 A <- 5    B <- ?   C <- ?
2 A <- 5    B <- 3   C <- ?
3 A <- 5    B <- 3   C <- A + B = 8 
4 A <- 2    B <- 3   C <- 8
5 A <- 2    B <- 3   C <- B - A = 1
*/

// affecter des valeurs aux variables

$a = 5;
$b = 3; 
$c = $a + $b;
$a = 2;
$c = $b - $a;

// afficher les variables

echo 'Debut';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo 'Fin';

?>