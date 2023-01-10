<?php
/*Saisir 3 entiers a, b, c et déterminer dans R les racines de
l'équation ax2 + bx + c = 0.
*/

echo 'debut';

//initialisation des valeurs par l'utilisateur (valeurs A,B,C)
$valeursA = readline('tapez la valeurs de A');
$valeursB = readline('tapez la valeurs de C');
$valeursC = readline('tapez la valeurs de B');

//initialisation de la valeurs x(inconnu) et solution
$solution = 0;

//calcule de la variable delta
$delta = ($valeursB*$valeursB)-4*$valeursA*$valeursC;


if ($delta < 0){
    echo 'lequation na aucune solution réelle ';
    echo"\n";
    echo 'le delta et '. $delta;
} else 
    if($delta == 0){
        echo 'lequation a une seul solution réel ';
        $x = -$valeursB/2*$valeursA;
        //$solution = $valeursA*$x**2+$valeursB*$x+$valeursC;
        echo $x;
    } else
        if($delta > 0){
            echo 'lequation a deux réeelles solution ';
            $x = -$valeursB-sqrt($delta)/2*$valeursA;
            echo 'premiere solution' . $x;
            $xDeux = -$valeursB+sqrt($delta)/2*$valeursA;
            echo "\n";
            echo 'deuxieme solution' . $xDeux;
        }
echo "\n";
echo 'fin';
?>