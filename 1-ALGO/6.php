<?php
/* 
Ecrire un algorithme permettant d'échanger les valeurs de deux variables "a" et "b"
a = 1, b = ?, temp = ?;
a = 1, b = 2, temp = ?;
a = 1, b = 2, temp = 1;
a = 2, b = 2, temp = 1;
a = 2, b = 1, temp = 1;
*/

// initialisation des variables
echo 'Début';
$a = 1;
$b = 2;

// affichage sans changement 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;


// changement de passe 
$temp = $a;
$a = $b;
$b = $temp;

// affichage avec changement 
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo 'Fin';
