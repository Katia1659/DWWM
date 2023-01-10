<?php
    /*
    Ecrire un algorithme permettant d'échanger les valeurs de deux variables A et B.

    Var A,B,C : Entier;

    debut
        A = 5;
        B = 10;
        TEMP = A;
        A = B;
        B = TEMP;
    fin

    */

    // Initialisation des variables
    $a = 5;
    $b = 10;
    // Transfère les valeurs des variables a dans b et inversement
    $temp = $a;
    $a = $b;
    $b = $temp;

    // Affichage du résultat
    echo 'début';
    echo PHP_EOL;
    echo $a;
    echo PHP_EOL;
    echo $b;
    echo PHP_EOL;
    echo 'fin';
?>