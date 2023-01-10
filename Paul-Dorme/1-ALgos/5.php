<?php 
// Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
// Var A, B : Entier
// A <- 5
// B <- 2
// A <- 2
// B <- 2

$a = 5;
$b = 2;
$a = $b;
$b = $a;

echo 'A = '.$a."\n";
echo 'B = '.$b;
?>