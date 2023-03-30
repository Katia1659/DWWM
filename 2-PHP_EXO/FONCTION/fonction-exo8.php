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

function nombres_entiers($a,$b ) : bool {

    if (is_int ($a) && is_int($b)) {
        return true;
    } else {
        return false;
    }

}

$nb1=10;
$nb2=5;
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);

echo "\n";

$nb1= 2;
$nb2= 8;
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);

echo "\n";

$nb1= 7;
$nb2= 7;
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);

echo "\n";

$nb1='foo';
$nb2= 5;
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);

echo "\n";

$nb1= 10;
$nb2= 'bar';
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);

echo "\n";

$nb1= 'foo';
$nb2= 'bar';
$resultat= nombres_entiers($nb1, $nb2);
var_dump($resultat);
?>
