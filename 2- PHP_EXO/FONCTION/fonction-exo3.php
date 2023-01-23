<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

// fonction qui additionne
function addition(int $nb1,int $nb2): int{
    $som= $nb1 + $nb2;
    return $som;
}
$nb1 = 1;
$nb2 = 2;

echo addition($nb1,$nb2);
