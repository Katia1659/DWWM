<?php

/*

écrire une fonction nommée `nombres_entiers` qui :

- prend un paramètre nommé `$a`
- prend un paramètre nommé `$b`
- renvoit `false` si le paramètre `$a` n'est pas un nombre entier
- renvoit `false` si le paramètre `$b` n'est pas un nombre entier
- renvoit `true` sinon

appeler la fonction avec les paramètres `10` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `2` et `8`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `7` et `7`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `'foo'` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `10` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

appeler la fonction avec les paramètres `'foo'` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`

*/
function nombres_entiers ( $a,  $b) : string {
    
    switch(true){
        case !is_int($a) and !is_int($b) :
            return 'false';
            break;       
        default :
            return 'true';
            break;
    }
}
echo nombres_entiers (10,5)."\n";
$resultat = nombres_entiers (10,5);
var_dump($resultat);

echo nombres_entiers (2,8)."\n";
$resultat = nombres_entiers (2,8);
var_dump($resultat);

echo nombres_entiers (7,7)."\n";
$resultat = nombres_entiers (7,7);
var_dump($resultat);

echo nombres_entiers ('foo',5)."\n";
$resultat = nombres_entiers ('foo',5);
var_dump($resultat);

echo nombres_entiers (10,'bar')."\n";
$resultat = nombres_entiers (10,'bar');
var_dump($resultat);

echo nombres_entiers ('foo','bar')."\n";
$resultat = nombres_entiers ('foo','bar');
var_dump($resultat);