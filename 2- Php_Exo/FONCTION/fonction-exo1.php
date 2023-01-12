<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/

//creation de la function
function message(string $mess) : void{
    
    echo $mess;

}


message("php 5.6"."\n");