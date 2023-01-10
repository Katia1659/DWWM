<?php 
    /*
    Que produit l'algorithme suivant ?

    Var A,B,C : Caractères;
    
    debut
        A <- "423";     A <- "423" B <- ? C <- ?
        B <- "12";      A <- "423" B <- "12" C <- ?
        C <- A + B;     A <- "423" B <- "12" C <- "435"
    fin
    */

    // Initialisation des variables
    $a = "423";
    $b = "12";
    $c = $a + $b;

    // Affichage du résultat
    echo 'debut';
    echo PHP_EOL;
    echo $c;
    echo PHP_EOL;
    echo 'fin';

    // ça additionne les variables a et b pour les mettre dans la variable c, cela donne le résultat suivant : 435.
?>