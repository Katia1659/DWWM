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

// Le 2 par défaut n'est pas fixe, il est peut être modifiable 
function puissance (int $para1, int $para2 = 2 ) : string { 
return $para1 ** $para2;
}


echo puissance( 2 );
echo PHP_EOL;
echo puissance( 2 , 3 );