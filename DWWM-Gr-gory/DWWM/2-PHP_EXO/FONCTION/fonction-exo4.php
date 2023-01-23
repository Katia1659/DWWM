<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

//creation de la fonction
function soustraction(int $nb1, int $nb2):int{
    $res = $nb1 - $nb2;
    return $res;
}

//on appelle la fonction
$resultat = soustraction(3,2);

//on affiche le resultat dans la console
echo $resultat;