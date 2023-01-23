<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

//affectation de la fonction addition
function addition(int $val1, int $val2): int {
    $somme = $val1 + $val2 ;
    return $somme;
}



//appel de la fonction
echo "Le résultat de l'addition est:". addition(1, 2);