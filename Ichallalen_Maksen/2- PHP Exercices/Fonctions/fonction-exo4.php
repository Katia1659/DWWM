<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/
//On crée la fonction soustraction
function soustraction(float $n1,float $n2):float{
    return $n1 - $n2;
}
$n1 = 2;
$n2 = 3;
//On exécute la fonction
echo soustraction($n1,$n2)





?>