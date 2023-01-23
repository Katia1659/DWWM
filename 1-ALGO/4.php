<?php
/* 
Quelles seront les valeurs des variables "a", "b", et "c" après exécution des instructions suivantes ? 
Var a, b, c : Entier;
début 
a <- 3;
b <- 10;
c <- a + b;
b <- a + b;
a <- c;
fin

a = 3, b = ?, c = ?;
a = 3, b = 10, c = ?;
a = 3, b = 10, c = 13;
a = 3, b = 13, c = 13;
a = 13, b = 13, c = 13;
*/

// initialisation des variables
echo 'Début';
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

//affichage des réponses
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

echo 'Fin';
