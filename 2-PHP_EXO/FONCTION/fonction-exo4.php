<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

//affectation de la fonction soustraction
function soustraction(int $val1, int $val2): int{
    $diff = $val1 - $val2 ;
    return  $diff;
}


//appel de la fonction
echo "La différence est de: ". soustraction(3, 2); 
?>