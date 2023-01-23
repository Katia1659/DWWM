<?php
/* 
Saisir 3 entier "a", "b", "c" et déterminer dans "R" les racines de l'équation ax² + bx + c = 0.

lire a
lire b
lire c

R = b²-4ac

Si R > 0
Si R = 0 
Si R < 0

*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables 
$d = 0;
$r = 0;
$r2 = 0;

// choix des nombre par l'utilisateur 
$a = readline("Choisir un nombre ");
$b = readline("Choisir un nombre ");
$c = readline("Choisir un nombre ");
echo PHP_EOL;

// calcul descriminant
$d = $b ^ 2 - 4 * $a * $c;

// affichage conditionné 
if ($d > 0) {
    $r = -$b + sqrt($d) / 2 * $a;
    echo 'Premier résultat ' . $r;
    echo PHP_EOL;
    $r2 = -$b - sqrt($d) / 2 * $a;
    echo 'Second résultat ' . $r2;
} elseif ($d = 0) {

    $r = -$b / 2 * $a;
    echo 'Résultat ' . $r;
} else {
    'Pas de réponse possible';
}

echo PHP_EOL;


echo 'Fin';
