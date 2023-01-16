<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/


// Fonction message qui affiche le message envoyé.
function message(string $mot): void{
    echo $mot.PHP_EOL;
    

}

message('Php 5.6');
