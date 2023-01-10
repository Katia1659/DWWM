<?php 
    /*
    Quel résultat produit le programme suivant ?
    algorithme double;
    Var val,double : Entier;
    
    debut
        val <- 231;             val <- 231 double <- ? 
        double <- val * 2;      val <- 231 B <- 462
        ecrire(val);            231
        ecrire(double);         462
    fin
    */

    // Initialisation des variables
    $val = 231;
    $double = $val * 2;

    // Affichage du résultat
    echo 'debut';
    echo PHP_EOL;
    echo $val;
    echo PHP_EOL;
    echo $double;
    echo PHP_EOL;
    echo 'fin';
?>