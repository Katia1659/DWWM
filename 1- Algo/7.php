<?php 
    /*
    On dispose de trois variables A,B et C. 
    Ecrivez un algorithle transférant à B la valeur de A , 
    à C la valeur de B et à A la valeur de C

    Var A,B,C,temp : Entier;

    début
        A = 5;
        B = 8;
        C = 12;
        temp = B;
        B = A;
        A = C;
        C = temp;
    fin

    */

    // Initalisation des variables.
    $a = 5;
    $b = 8;
    $c = 12;
    
    // Permet de permuté les de a b et c entre elle. 
    $temp = $b;
    $b = $a;
    $a = $c;
    $c = $temp;

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