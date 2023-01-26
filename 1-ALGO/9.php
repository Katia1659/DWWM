<?php
/* Que produit l'algoritme suivant
Var A, B, C : caracteres;
Debut
    a <- "423";
    b <- "12";
    c <- a & b;
Fin
*/

$a = "423";
$b = "12";
$c = $a.$b;

echo 'Debut';
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo $c;

/* l'algoritme produit la concatenation de la variable a avec la variable b */

?>