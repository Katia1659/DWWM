<?php 

/*
saisir 3 eniers a, b, c et determiner dans R les racines de l'equation ax² + bx + c = 0 

declare a
declare b
declare c
declare x
declare delta
declare racine

delta = (b*b) - 4 * a * c

si delta < 0 
    alors "pas de solution"

    sinonSi delta = 0 
        alors 1 solution -b / 2a

        sinonSi delta > 0 
            alors 2 solutions x1 = (-b - racine (delta)) / 2a   et x2 = (-b + racine(delta)) / 2a
        finSinonSi
    FinSinonSi
FinSi

Fin
*/

// demande à l'utilisateur
$a = readline("donnez la valeur de a : ");
$b = readline("donnez la valeur de b : ");
$c = readline("donnez la valeur de c : ");

// calcul delta
$delta = ($b * $b) - 4 * $a * $c;
echo "la valeur de delta est : ".$delta."\n";


// solution delta
if ($delta < 0 ) {
    echo "pas de solution \n";
}   elseif ($delta == 0) {
    echo "une solution \n"; 
    $x0 = - $b / 2 * $a;
    echo "la valeur de x0 est : ".$x0."\n";

}   elseif ($delta > 0 ) {
    echo " 2 solution\n"; 
    $x1 = - $b - sqrt($delta) / 2 * $a;
    $x2 = - $b + sqrt($delta) / 2 * $a;
    echo "la valeur de x1 est : ".$x1."\n";
    echo "la valeur de x2 est : ".$x2."\n";    

}

echo "Fin";

?>