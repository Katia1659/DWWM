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
// if (true) {
//     echo "c'est vrai";
//     echo PHP_EOL;
// }

switch (true) {
     default:
     echo "c'est vrai";
        break;
}

// bloc 2
$i = 2;

// if ($i == 100) {
//     echo "égal à cent";
//     echo PHP_EOL;
// } else {
//     echo "différent de cent";
//     echo PHP_EOL;
// }

//on regarde $i
switch ($i) {
    //si $i = 100
    case 100:
        echo "égal à cent.\n";        
        break;
        //sinon
    default:
        echo "différent de cent.\n";
        break;
}

// bloc 3
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
$password = "abcd";
switch ($password) {
    case 'toto':
        echo "vous êtes loggé.\n";
        break;
        case $password == 1234 || $password =='abcd':
            echo "êtes-vous un robot ?.\n";
            break;               
    default:
    echo "mauvais mot de passe.\n";
        break;
}                   


/* bloc 4 bloc 4 résultat attendu : $variable est un nomnbre entier */

$variable = 25;

switch (true) {
    case (is_string($variable)):
        echo "$variable est une chaîne de caractères.\n";
        break;
    case (is_float($variable)):
        echo "$variable est un nombre à virgule flottante.\n";
        break;
    case (is_array($variable)):
        echo '$variable est une liste .\n';
        break;
    case (is_int($variable)):
        echo "$variable est un nomnbre entier.\n";
        break;
}
