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

//creation de la function
function puissance(int $nb1, int $nb2= 2) : int{ 
    $p = $nb1**$nb2;
    return $p;
}

//appel de la foncion en utilisant qu'un parametre
echo puissance(2)."\n";

//appel de la foncion en utilisant deux parametre
echo puissance(2, 3);