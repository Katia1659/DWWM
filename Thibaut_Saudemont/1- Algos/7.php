<?php
/* 
On dispose de trois variables "a", "b" et "c". Ecrivez un algorithme transférant à "b" la valeur de "a", à "c" la valeur de "b" et à "a" la valeur de "c"

a = 1, b = ?, c = ?, temp = ?;
a = 1, b = 2, c = ?, temp = ?;
a = 1, b = 2, c = 3, temp = ?;
a = 1, b = 2, c = 3, temp = 1;
a = 3, b = 2, c = 3, temp = 1;
a = 3, b = 2, c = 2, temp = 1;
a = 3, b = 1, c = 2, temp = 1;

*/
// initialisation des variables
echo 'Début';
$a = 1;
$b = 2;
$c = 3;

// Affichage avant modification
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo $c;
echo PHP_EOL;

//changement de place 
$temp = $a;
$a = $c;
$c = $b;
$b = $temp;

//Affichage apres modification
echo PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

echo 'Fin';
