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

// focntion qui verifie si la valeur est un int ou un autre et lui met un code en fonction du resultat
function a_plus_grand_b($a,$b) {
    if (!is_int($a) || !is_int($b)) {
        return false;
        } else {
        if ($a>$b) {
            return 1;
        } else if ($a<$b) {
            return -1;
        }else{
            return 0;
        }
    }   
}

// rentre les valeurs en dur puis utilise la fonction pour verifier et afficher 
$resultat=a_plus_grand_b(10,5);
var_dump($resultat)."\n";

$resultat=a_plus_grand_b(2,8);
var_dump($resultat)."\n";

$resultat=a_plus_grand_b(7,7);
var_dump($resultat)."\n";

$resultat=a_plus_grand_b('foo',5);
var_dump($resultat)."\n";

$resultat=a_plus_grand_b(10,'bar');
var_dump($resultat)."\n";

$resultat=a_plus_grand_b('foo','bar');
var_dump($resultat)."\n";

?>