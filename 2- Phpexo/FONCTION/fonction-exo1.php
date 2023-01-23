<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/
//dans ATTENTION le 'Php 5.6' est une chaine de caracter et pas une chaine et un float 
function message( string $para1 ): void {
    echo 'Php 5.6' . PHP_EOL;
}

message('Php 5.6');
