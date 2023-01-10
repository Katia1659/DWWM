<?php 

// Saisir 3 entiers a, b , c et determiner dans R les racines de l'equation ax²+bx+c=0


// Variables
$a = readline('Premier nomnbre ? -> ');
$b = readline('Deuxième nombre ? -> ');
$c = readline('Troisième nombre ? -> ');

$R="";


// Calcul du Delta
$Delta = $b²-4*$a*$c;

//Algo 
if ($Delta > 0) {
    $R = (-$b+sqrt($Delta))/2*$a;
} else if ($Delta = 0) {
    $R = (-$b)/(2*$a);

}


?>