<?php
/* 
Quelles seront les valeurs des variables "a" et "b" après exécution des instructions suivantes ? 
Var a, b, : Entier;

début 
a <- 5
b <- 2
a <- b
b <- a
fin


a = 5, b = ?;
a = 5, b = 2;
a = 2, b = 2;
a = 2, b = 2;
*/

// initialisation des variables
echo 'Début';
$a = 5;
$b = 2;
$a = $b;
$b = $a;

// affichage des réponses 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo 'Fin';
