<?php
/* 
 /* 
Quelles seront les valeurs des variables "a" et "b" après exécution des instructions suivantes ? 
Var a, b, : Entier;

début 
a <- 5;
b <- a + 4;
a <- a + 1;
b <- a - 4;
fin

a = 5, b = ?;
a = 5, b = 9;
a = 6, b = 9;
a = 6, b = 2;

*/

// initialisation des variables
echo 'Début';
$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;


// affichage des réponses 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo 'Fin';
