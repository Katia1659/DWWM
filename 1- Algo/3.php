<?php
    /*
    Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ?
    Var A,B : Entier;

    début
        A = 5;
        B = A + 4;
        A = A + 1;
        B = A - 4;
    fin
    */


    // Initialisation des variables
    $a = 5;
    $b = $a + 4;
    $a = $a + 1;
    $b = $a - 4;


    // Affichage du résultat
    echo 'début';
    echo PHP_EOL;
    echo $a;
    echo PHP_EOL;
    echo $b;
    echo PHP_EOL;
    echo 'fin';
?>