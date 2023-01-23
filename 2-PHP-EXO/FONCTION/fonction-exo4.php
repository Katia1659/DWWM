<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

function soustraction(int $param1, int $param2) : string {
    return $param1-$param2;
}

$nb1= 5;
$nb2 = 3;
$result= soustraction($nb1, $nb2);
echo $result;

?>
