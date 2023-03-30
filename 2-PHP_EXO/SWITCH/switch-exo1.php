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

echo "bloc 1"."\n";
// bloc 1
/*
 if (true) {
    echo "c'est vrai";
    echo PHP_EOL;
}
*/

switch ($true) {
    default :
        echo "c'est vrai";
        break;
}

echo "\n"."\n";
// bloc 2

echo "bloc 2"."\n";
/*
$i = 2;

 if ($i == 100) {
     echo "égal à cent";
     echo PHP_EOL;
 } else {
     echo "différent de cent";
     echo PHP_EOL;
 }
*/

$i= 100;

switch ($i==100) {
    case 1:
        echo "égal à 100";
        break;
    
    default:
        echo "différent de cent";
        break;
}

echo "\n"."\n";

// bloc 3
echo "bloc 3"."\n";

/* 
$password = "toto";

if ($password == "toto") {
    echo "vous êtes loggé";
    echo PHP_EOL;
} else if ($password == "1234") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else if ($password = "abcd") {
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
} else {
    echo "mauvais mot de passe";
    echo PHP_EOL;
}
*/

$password ="s1";

switch ($password) {
    case "toto":
        echo "vous êtes loggé";
        break;

    case $password=="1234" || $password=="abcd":
        echo "êtes-vous un robot ?";
        break;

    default:
        echo "mauvais mot de passe";
}

echo "\n"."\n";

// bloc 4
echo "bloc 4"."\n";

/*
$variable = 1;

if (is_string($variable)) {
    echo "$variable est une chaîne de caractères";
    echo PHP_EOL;
} else if (is_float($variable)) {
    echo "$variable est un nombre à virgule flottante";
    echo PHP_EOL;
} else if (is_array($variable)) {
    echo "$variable est une liste ";
    echo PHP_EOL;
} else if  (is_int($variable)) {
    echo "$variable est un nomnbre entier";
    echo PHP_EOL;
}
*/

$variable = array(1,2,3);

switch (true) {
    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        break;
    
    case is_float($variable):
        echo "$variable est un nombre à virgule flottante";
        break;

    case is_array($variable):
        for ($i=0; $i < count($variable) ; $i++) { 
            echo $variable[$i]." est une liste "."\n";
        }
        break;
        
    case is_int($variable):
        echo "$variable est un nomnbre entier";
        break;
 }

?>
