<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

bloc 1
résultat attendu :
c"est vrai

bloc 2
résultat attendu :
différent de cent

bloc 3
résultat attendu :
êtes-vous un robot ?

bloc 4
résultat attendu :
$variable est un nomnbre entier

*/

// bloc 1

switch (true) {
    case 'value':
        echo "c'est vrai";
        echo PHP_EOL;        
            break;
}

// bloc 2

$i = 2;

switch ($i) {
    case $i == 100;
        echo "égal à cent";
        echo PHP_EOL;
            break;

    default:
        echo "différent de cent";
        echo PHP_EOL;
            break;
}


// bloc 3



$password = "toto";

switch ($password) {
    case $password == "toto":
        echo "vous êtes loggé";
        echo PHP_EOL;
            break;

    case $password == "1234":
        echo "êtes-vous un robot ?";
        echo PHP_EOL;
            break;

    case $password == "abcd":
        echo "êtes-vous un robot ?";
        echo PHP_EOL;
            break;
    
    default:
        echo "mauvais mot de passe";
        echo PHP_EOL;
            break;
}
// bloc 4


$variable = 1;

switch ($variable) {
    case (is_string($variable)) :
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
            break;

    case (is_float($variable)) :
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
            break;

    case (is_array($variable)) :
        echo "$variable est une liste ";
        echo PHP_EOL;
            break;

    case (is_int($variable)) :
        echo "$variable est un nomnbre entier";
        echo PHP_EOL;
        break;
}