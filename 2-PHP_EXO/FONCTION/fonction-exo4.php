<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/


//creationde la function
function addition( int $nb1, int $nb2):int{
    $resultat = $nb1 - $nb2;
    return $resultat;

}
echo 'les resultat et de '.addition(3, 2);