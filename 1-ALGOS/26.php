<?php

/* Exercice 26 

Saisir 3 entiers a, b et c et déterminer dans R les racines de l'équation ax^2 + bx + c = 0

*/ 



// Demande de saisie des entiers a,b et c
$a = readline ("Saisir l'entier a ");
$b = readline ("Saisir l'entier b ");
$c = readline ("Saisir l'entier c ");

// calcul du déterminant ($d)
$d = $b** - (4 * $a * $c);

// Affichage déterminant
echo $d;

// On détermine dans r les racines de l'équation pour chaque cas, en l'occurrence pour $d > 0, pour $d = 0.
if ($d > 0) {
    $x1 = -$b + sqrt($d) / 2 * $a;

    $x2 = -$b - sqrt($d) / 2 * $a;
    echo "R est égale à $x1 ou $x2";

} else
    if ($d = 0) {

        $x = -$b / 2 * $a;
        echo "R est égale à $x";
    }

    else {
        $x = 0;
        echo "R est égale à 0";
    }
