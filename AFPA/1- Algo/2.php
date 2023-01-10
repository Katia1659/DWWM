<?php
    /*
    Quelles seront les valeurs des variables A,B et C après exécution des instructions suivantes ?

    Var A,B,C : Entier;

    début
        A = 5;
        B = 3;
        C = A + B;
        A = 2;
        C = B - A;
    fin
    */
    // Initialisation des variables
    $a = 5;
    $b = 3;
    $c = $a + $b;
    $a = 2;
    $c = $b - $a;

    // Affichage du résultat
    echo 'début';
    echo PHP_EOL;
    echo $a;
    echo PHP_EOL;
    echo $b;
    echo PHP_EOL;
    echo $c;
    echo PHP_EOL;
    echo 'fin';

?>