<?php
/* Saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation ax2 + bx + c = 0. 
Debut
lire a 
lire b
lire c 
calculer le delta (b²-4ac)
si delta <0 aucune solution
si delta =0 alors 1 solution (x= -(2/(2a)))
si delta >0 alorss 2 solutions (x1 = (-b-racine delta)/2a)
                                x2 = (-b+racine delta)/2a)
*/

// entree des valeurs par l'utilisateur
echo "ax²+bx+c = 0 ";
echo PHP_EOL;
$a = readline('A = ? ');
$b = readline('B = ? ');
$c = readline('C = ? ');

// variable delta
$delta = ($b * $b)-(4 * $a * $c);

//on calcule le delta et on traite les 3 cas differents
if ($delta<0) {
    echo "aucune solutions";
}
elseif ($delta==0) {
    echo "1 seule solution =>  x = ";
    $x = (-($b/(2 * $a)));
    echo $x;
}
elseif ($delta>0) {
    echo "2 solution =>  x1 = ";
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    echo $x1;
    echo "     x2 = ";
    $x2 = (-$b + sqrt($delta)) / (2 * $a);
    echo $x2;
}
?>