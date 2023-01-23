<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

function soustraction(int $n1, int $n2){
    $somme=$n1-$n2;
    return $somme;
}
echo soustraction(10,6);