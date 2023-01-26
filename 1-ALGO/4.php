<?php
/* Quelles seront les valeurs des variables A, B et C apres executions des instructions suivantes ?
Var A, B, C : Entier;
Debut 
    a <- 3          a=3     b=?     c=?
    b <- 10         a=3     b=10    c=?
    c <- a+b        a=3     b=10    c=13
    b <- a+b        a=3     b=13    c=13
    a <- c          a=13    b=13    c=13
Fin
*/

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo 'Debut';
echo PHP_EOL;
echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo $c;
echo PHP_EOL;
echo 'Fin'
?>