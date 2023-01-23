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


// écrire une fonction nommée `puissance`:

function puissance (int $nb1, int $nb2=2 ): int{
   
    return $nb1 ** $nb2;

}

$x=3;
$y=4;

// appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console:
echo puissance($x);
echo "\n";

// appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console:
echo puissance($x,$y);



?>
