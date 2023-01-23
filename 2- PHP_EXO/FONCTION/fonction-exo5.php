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

// fonction qui calcule la puissance
function puissance(int $nb1,int $nb2=2):int{
    return pow($nb1,$nb2);
}
$nb1 = 2;
$nb2 = 3;

echo puissance($nb1).PHP_EOL;

echo puissance($nb1,$nb2);