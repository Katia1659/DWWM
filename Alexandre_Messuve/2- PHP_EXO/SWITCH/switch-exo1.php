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
    default:
        echo "c'est vrai".PHP_EOL;
        break;
}

// if (true) {
//     echo "c'est vrai";
//     echo PHP_EOL;
// }

// bloc 2
$i = 2;
// switch qui regarde si la variable i est egal à 100 ou different
switch ($i) {
    case 100:
        echo "égal à cent";
        echo PHP_EOL;
        break;
    
    default:
        echo "différent de cent";
        echo PHP_EOL;
        break;
}
// if ($i == 100) {
//     echo "égal à cent";
//     echo PHP_EOL;
// } else {
//     echo "différent de cent";
//     echo PHP_EOL;
// }

// bloc 3
$password = "1234";
// switch qui permet de savoir si c'est le bon mdp ou non.
switch ($password) {
    case 'toto':
        echo "vous êtes loggé".PHP_EOL;
        break;
    
    case '1234':
        echo "êtes-vous un robot ?".PHP_EOL;
        break;

    case 'abcd':
        echo "êtes-vous un robot ?".PHP_EOL;
        break; 

    default:
        echo "mauvais mot de passe".PHP_EOL;
        break;
}

// if ($password == "toto") {
//     echo "vous êtes loggé";
//     echo PHP_EOL;
// }
// else if ($password == "1234") {
//     echo "êtes-vous un robot ?";
//     echo PHP_EOL;
// } else if ($password = "abcd") {
//     echo "êtes-vous un robot ?";
//     echo PHP_EOL;
// } else {
//     echo "mauvais mot de passe";
//     echo PHP_EOL;
// }

// bloc 4
$variable = 1;
// Switch pour savoir si la variables est de type string,float,array,int.
switch ($variable) {
    case (is_string($variable)):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;
    
    case (is_float($variable)):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;

    case (is_array($variable)):
        echo "$variable est une liste ";
        echo PHP_EOL;
        break;
    
    case (is_int($variable)):
        echo "$variable est un nomnbre entier";
        echo PHP_EOL;
        break;
}

// if (is_string($variable)) {
//     echo "$variable est une chaîne de caractères";
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo "$variable est un nombre à virgule flottante";
//     echo PHP_EOL;
// } else if (is_array($variable)) {
//     echo "$variable est une liste ";
//     echo PHP_EOL;
// } else if  (is_int($variable)) {
//     echo "$variable est un nomnbre entier";
//     echo PHP_EOL;
// }

