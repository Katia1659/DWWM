<?php

/*

écrire une fonction nommée `a_plus_grand_b` qui :

- prend un paramètre nommé `$a`
- prend un paramètre nommé `$b`
- renvoit `false` si le paramètre `$a` n'est pas un nombre entier
- renvoit `false` si le paramètre `$b` n'est pas un nombre entier
- renvoit `1` si `$a` est plus grand que `$b`
- renvoit `-1` si `$a` est plus petit que `$b`
- renvoit `0` si `$a` et `$b` sont égaux

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

function a_plus_grand_b ($a,$b ) : string {

    if ( is_int($a) && is_int($b) ) {
        if ( $a > $b ) {
            return '1';
        } elseif ( $a < $b ) {
            return '-1';
        } elseif ( $a = $b ) {
            return '0';
        }
    } elseif (!is_int($a) or !is_int($b)){ 
        return 'false';
    } 
}
   
    


$a= 10 ;
$b= 5 ;
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);

$a= 2 ;
$b= 8 ;
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);

$a= 7 ;
$b= 7 ;
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);

$a= 'foo' ;
$b= 5 ;
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);

$a= 10 ;
$b= 'bar' ;
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);

$a= 'foo' ;
$b= 'bar';
$resultat= a_plus_grand_b ($a, $b);
var_dump ($resultat);
?>
