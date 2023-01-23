<?php

/* 

Exercice 7 

On Dispose de trois variables A, B et C. Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C. 

$a = 5;
$b = 7;
$c = 2;

$temp = $c;
$c = $a;
$a = $temp; 

$temp = $a;
$a = $b;
$b = $temp;

$temp = $b;
$b = $c;
$c = $temp;

$temp = $c;
$c = $a;
$a = $temp; 

echo 'Début';
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo 'Fin';

*/

// On écrit un algorithme d'échange de valeurs, avec 3 valeurs à échanger entre elles

$a = 1;
$b = 2;
$c = 3;

$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

echo 'Début';
echo "\n";

echo $a;
echo "\n";

echo $b; 
echo "\n";

echo $c; 
echo "\n";

echo 'Fin';
