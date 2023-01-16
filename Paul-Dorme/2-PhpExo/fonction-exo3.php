<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

//Initialisation de la fonction
function addition(int $n1, int $n2) : int {

    return $n1 + $n2;

}

$n1 = 1;
$n2 = 2;
//Affichage de la fonction
echo addition($n1,$n2);