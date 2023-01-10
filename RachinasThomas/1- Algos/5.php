<?php

/*
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
Var A, B : Entier
Debut
    A <- 5 
    B <- 2 
    A <- B
    B <- A
Fin

A <- 5      B <- ?
A <- 5      B <- 2
A <- B = 2  B <- 2
A <- 2      B <- A = 2 

*/

//affecter les valeurs aux variables

$a = 5;
$b = 2;
$a = $b;
$b = $a;

// afficher les variables

echo "Debut";
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo "Fin"

?>


