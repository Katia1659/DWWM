<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/



function addition( int $para1, int $para2): int {
    return  $para1 + $para2 ;
}
echo addition( 1, 2 );


