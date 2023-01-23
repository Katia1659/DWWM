<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

function addition (int $param1, int $param2) : string {
    return $param1 + $param2;

} 
 
$nb1=2;
$nb2=6;

$result=addition($nb1,$nb2);
echo $result;
?>