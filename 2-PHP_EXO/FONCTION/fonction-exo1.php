<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/


//définition de la procédure
function message($text): void {
    echo $text. "\n";
}


$afficher = 'Php 5.6';
//appel de la procédure et affectation du text à afficher
message($afficher);

?>