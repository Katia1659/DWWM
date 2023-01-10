<?php
/* Saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation ax² + bx + c = 0 */

//Entrée des 3 entiers de l'équation
$a= readline ("Entrez un nombre a : ");
$b= readline ("Entrez un nombre b : ");
$c= readline ("Entrez un nombre c : ");

//Calcul de delta
$d = (($b * $b) -4 *$a *$c);

if ($d >0 ){

    $x1 = (-$b + sqrt($d)/2 * $a);
    $x2 = (-$b - sqrt($d)/2 * $a); 
    echo "R est égale à $x1 ou $x2";
}

else if ($d==0) {
    $x = -$b/(2*$a);
    echo "R est égale à $x";
}
else if ($d<0) {
    $x = (-$b - sqrt(-$d)/2*$a );
    echo "R est égale à $x";
}
?>