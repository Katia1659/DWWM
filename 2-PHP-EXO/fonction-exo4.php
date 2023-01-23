<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

//Initialisation de la fonction
function soustraction(int $n1, int $n2) : int {

    return $n1 - $n2;

}

$n1 = 3;
$n2 = 2;

//Affichage de la fonction
echo soustraction($n1,$n2);