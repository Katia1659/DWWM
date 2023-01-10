<?php
/* Quelles seront les valeurs des variables "a" et "b" après exécution des instructions suivantes ? 
Var a, b : Entier 

début
a <- 5;
b <- a + 3;
a <- 3;
fin


a = 1; b = ?;
a = 1; b = 4; 
a = 3; b = 4;

*/

// initialisation des variables
echo 'Début';
$a = 1;
$b = $a + 3;
$a = 3;

// affichage des réponses 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo 'Fin';
