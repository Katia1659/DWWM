<?php

/* 
Quelles seront les valeurs des variables A, B et C après excécution des instructions suivantes ? 
Var A, B, C : Entier; 
Debut
    A <- 3 
    B <- 10; 
    C <- A + B;
    B <- A + B; 
    A <- C
Fin

A <- 3    B <- ?      C <- ?
A <- 3    B <- 10     C <- ? 
A <- 3    B <- 10     C <- 13
A <- 3    B <- 13     C <- 13
A <- 13   B <- 13     C <- 13
*/

// affecter les valeurs aux variables

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

//afficher les variables

echo "Debut";
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo "fin";

