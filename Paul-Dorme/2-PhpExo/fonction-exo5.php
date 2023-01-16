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

//Initialisation de la fonction
function puissance(int $n1, int $n2 = 2) : int {

      return $n1**$n2;
}

$n1 = 2;
//Affichage de la fonction /w 1 seul paramètre
echo puissance($n1)."\n";

$n1 = 2;
$n2 = 3;
//Affichage de la fonction /w 2 paramètres
echo puissance($n1,$n2);