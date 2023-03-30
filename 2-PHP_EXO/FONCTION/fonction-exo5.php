<?php

/*

écrire une fonction nommée `puissance` qui :

- prend un premier paramètres de type nombre entier
- prend un deuxième paramètres de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console

*/


//appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
function puissance(int $param1, int $param2=2) : int {
    return $param1 ** $param2;
}

$nb1=2;
$result= puissance($nb1);
echo $result;

echo "\n";


//appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console
function puissance1(int $param1, int $param2=2) : int {
    return $param1 ** $param2;
}

$nb1=2;
$nb2=3;
$result= puissance($nb1, $nb2);
echo $result;
?>
