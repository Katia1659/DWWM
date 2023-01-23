<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console

*/


//définition de la fonction
function message($text): string {
    return $text. "\n";
}


$afficher = 'Php 5.6';
//apppel de la fonction et affectation du text à afficher
echo message($afficher);

?>