<?php
    /*
    Quelles seront les valeurs des variables A et B après exécution des instructions suivantes ? 

    Var A,B : Entier;

    début
        A = 5;
        B = 2;
        A = B;
        B = A;
    fin
    */


    // Initialisation des variables
    $a = 5;
    $b = 2;
    // La variable a prend la valeur de b dans un premier temps et dans le second b prend la valeur de a
    $a = $b;
    $b = $a;

    // Affichage du résultat
    echo 'début';
    echo PHP_EOL;
    echo $a;
    echo PHP_EOL;
    echo $b;
    echo PHP_EOL;
    echo 'fin';
?>