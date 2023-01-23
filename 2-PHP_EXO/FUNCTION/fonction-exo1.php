<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/

// écrire une fonction nommée `message`
function message (string $var): void{
    echo $var;
    echo "\n";
}

// appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`
$var = 'Php 5.6';
message($var);


?>