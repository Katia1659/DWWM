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

// fonction pour savoir si  les variables sont des entiers ou non et si a est plus grand ou plus petit que b ou sont egaux.
function a_plus_grand_b($a,$b){
    if (gettype($a) != 'integer'|| gettype($b) != 'integer') {
        return false;
    }elseif($a > $b){
        return 1;
    }elseif($a < $b) {
        return -1;
    }elseif($a == $b) {
        return 0;
    }
}



$val1 = 10;
$val2 = 5;
$val3 = 2;
$val4 = 8;
$val5 = 7;
$val6 = 'foo';
$val7 = 'bar';

// Affichage du resultats
$resultat = a_plus_grand_b($val1,$val2);
var_dump($resultat);


$resultat = a_plus_grand_b($val3,$val4);
var_dump($resultat);


$resultat = a_plus_grand_b($val5,$val5);
var_dump($resultat);


$resultat = a_plus_grand_b($val6,$val2);
var_dump($resultat);


$resultat = a_plus_grand_b($val1,$val7);
var_dump($resultat);


$resultat = a_plus_grand_b($val6,$val7);
var_dump($resultat);