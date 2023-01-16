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

//Initialisation de la fonction
function a_plus_grand_que_b($a,$b) {

    if (is_int($a) && is_int($b)) {
        if ($a > $b)
        {
            return 1;
        } else if ($a == $b) {
            return 0;
            } else {
                return -1;
            }
    }    else {
        return false;
    }
}

//Affichage des fonctions;
$resultat = a_plus_grand_que_b(10,5);
echo var_dump($resultat);


$resultat = a_plus_grand_que_b(2,8);
echo var_dump($resultat);


$resultat = a_plus_grand_que_b(7,7);
echo var_dump($resultat);


$resultat = a_plus_grand_que_b('foo',5);
echo var_dump($resultat);

$resultat = a_plus_grand_que_b(10,'bar');
echo var_dump($resultat);


$resultat = a_plus_grand_que_b('foo','bar');
echo var_dump($resultat);