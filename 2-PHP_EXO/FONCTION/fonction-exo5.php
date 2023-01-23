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

//on affecte la fonction
function puissance(int $val1, int $val2=2): float{
       
    $result = $val1 ** $val2;    
    return $result;
}

//On appelle la fonction
echo puissance(2). "\n";
echo puissance(2, 3);
?>