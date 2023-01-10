<?php
/* Ecrire un algorithme permettant d'echanger les valeurs de deux variables A et B.
Var A, B, C : Entier;
Debut
a <- ?  
b <- ?
c <- a
a <- b
b <- c
Fin
*/

$a = readline('Entrez la valeur de A :');
$b = readline('Entrez la valeur de B :');
$c = $a;
$a = $b;
$b = $c;

echo 'Debut';
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo 'Fin'

?>