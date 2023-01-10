<?php
/* 
Quelles seront les valeurs des variables "a", "b", et "c" après exécution des instructions suivantes ? 
Var a, b, c : Entier;

début 
a <- 5; 
b <- 3;
c <- a + b;
a <- 2;
c <- b - 4;
fin

a = 5, b = ?, c = ?; 
a = 5, b = 3, c = ?; 
a = 5, b = 3, c = 8; 
a = 2, b = 3, c = 8; 
a = 2, b = 3, c = 1; 
 */

// initialisation des variables
echo 'Début';
$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - $a;

// affichage des réponses 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

echo 'Fin';
