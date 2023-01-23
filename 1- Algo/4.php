<?php 
    /*
    Quelles seront les valeurs des variables A,B et C après exécution des instructions suivantes ?
    
    Var A,B,C : Entier;

    debut
        A = 3;           A <- 3 B <- ? C <- ?;
        B = 10;          A <- 3 B <- 10 C <- ?;
        C = A + B;       A <- 3 B <- 10 C <- 13;
        B = A + B;       A <- 3 B <- 13 C <- 13;
        A = C;           A <- 13 B <- 13 C <- 13;
    fin
    */
    // Initialisation des variables
    $a = 3;
    $b = 10;
    $c = $a + $b;
    $b = $a + $b;
    $a = $c;
    
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