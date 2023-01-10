<?php
    /* 
    Quelle seront les valeurs des variables A et B après exécution des instructions suivantes ?


    VAR A,B : Entier ;
    début 
        A = 1;
        b = A + 3;
        A = 3;
    fin
    */

    // Initialisation des variables
    $a = 1;
    $b = $a + 3;
    $a = 3;

    // Affichage du résultat
    echo 'début';
    echo "\n";
    echo $a;
    echo "\n";
    echo $b;
    echo PHP_EOL;
    echo 'Fin';
?>