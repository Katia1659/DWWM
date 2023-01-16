<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/
function addition (int $num1, int $num2) : int {
    return $num1 + $num2;
}
$num1 = 1;
$num2 = 2;
echo addition ($num1,$num2);
