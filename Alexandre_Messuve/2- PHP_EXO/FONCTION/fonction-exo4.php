<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/
// fonction qui soustrait
function soustraction(int $nb1,int $nb2): int{
    $diff= $nb1 - $nb2;
    return $diff;
}

$nb1 = 3;
$nb2 = 2;
echo soustraction($nb1,$nb2);