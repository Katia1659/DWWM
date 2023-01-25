<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/
//On crée la fonction addition
function addition(float $n1,float $n2):float{
    return $n1 + $n2;
}
$n1 = 1;
$n2 = 2;
//On exécute la fonction
echo addition($n1,$n2);


?>