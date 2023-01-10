<?php
/* Quelles sont les valeurs des variables A, B et C apres execution des instructions suivantes ?
Var A, B, C = Entier;
Début
    a <- 1          a=1     b=?     c=?
    b <- 3          a=1     b=3     c=?
    c <- a + b      a=1     b=3     c=4
    a <- 2          a=2     b=3     c=4
    c <- b - a      a=2     b=3     c=1
Fin
*/

    $a = 1;
    $b = 3;
    $c = $a + $b;
    $a = 2;
    $c = $b - $a;

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