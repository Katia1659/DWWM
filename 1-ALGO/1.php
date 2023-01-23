<?php
/* 
Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
Var A, B : Entier
Debut
    A <- 1
    B <- A + 3 
    A <- 3
Fin

1 A <- 1      B <- ?
2 A <- 1      B <- 4
3 A <- 3      B <- 4

*/

// affecter des valeurs aux variables

$a = 1;
$b = $a + 3;
$a = 3; 

// afficher les variables

echo 'Debut';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo 'Fin';

?>