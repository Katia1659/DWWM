<?php
/* On dispose de trois variables A, B et C. Ecrivez un algorithme transferant a B la valeur de A, a C la valeur de B et a A la valeur de C.
Var A, B, C, D : Entier;
Debut
a <- ?  
b <- ?
c <- ?
d <- a
a <- c
c <- b
b <- d
Fin
*/

$a = readline('Entrez la valeur de A :');
$b = readline('Entrez la valeur de B :');
$c = readline('Entrez la valeur de C :');
$d = $a;
$a = $c;
$c = $b;
$b = $d;

echo 'Debut';
echo PHP_EOL;
echo 'a = ';
echo $a;
echo PHP_EOL;
echo 'b = ';
echo $b;
echo PHP_EOL;
echo 'c = ';
echo $c;
echo PHP_EOL;
echo 'Fin'
?>