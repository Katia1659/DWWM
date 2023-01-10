<?php
/* Saisir 3 entiers a, b, c et déterminer dans r les racines de l'équation ax² + bx + c = 0.
début
écrire "entrer une valeur a"
lire (a)
écrire "entrer une valeur b"
lire (b)
écrire "entrer une valeur c"
lire (c)
delta <- b² - 4 * a * c
si delta = 0 alors 
    -b / (2 * a)
si delta > 0 alors 2 solutions
si delta < 0 alors aucune solution
*/

$a = readline('entrer la valeur de a');
$b = readline('entrer la valeur de b');
$c = readline('entrer la valeur de c');
$delta = $b² - 4 * $a * $c ;

//On ontre les différentes solutions
if ($delta == 0) {
    echo -$b / (2 * $a);    
} else if($delta > 0) {
    echo (-$b - sqrt($delta) / (2 * $a));
    echo "\n" ;
    echo (-$b + sqrt($delta) / (2 * $a));
} else if($delta < 0) {
    echo 'il n y a pas de solution' ;
}

?>