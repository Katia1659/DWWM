<?php
/* Saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation ax² + bx + c = 0.
Var a, b , c 

*/


//Variables a, b, c saisi par l'utilisateur pour le calcul de la fonction ax² + bx + c = 0.
$a=readline('Saisir un entier : ');
$b=readline('Saisir un entier : ');
$c=readline('Saisir un entier : ');
// On calcul delta pour déterminer les racines de l'equation.
$delta = ($b*$b)-4*$a*$c ;

//Variable x1 et x2 pour afficher par la suite le résultat de l'équation.
if ($delta<0) {
    echo ('pas de solution');
}   elseif ($delta==0) {
        $x1 = -$b/2*$a;
        echo "x1 = " .$x1 ;       
    }elseif ($delta>0) {
        $x1= (-$b-sqrt($delta))/2*$a;
        $x2=(-$b+sqrt($delta))/2*$a ;
        echo "x1 = " .$x1  ;
        echo PHP_EOL;
        echo "x2 = " .$x2 ;
    }


?>