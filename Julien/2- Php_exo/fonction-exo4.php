<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

function soustraction (int $num1, int $num2) : int {
    return $num1 - $num2;
}
$num1 = 3;
$num2= 2;
echo soustraction ($num1,$num2);