<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/

//Initialisation de la fonction
function  message (String $Str1) : void {
    
    echo $Str1."\n";
}

//Appel de la fonction
 message('Php 5.6');