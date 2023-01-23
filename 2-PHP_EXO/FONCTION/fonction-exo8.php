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

// fonction pour savoir si  les variables sont des entiers ou non.
function nombres_entiers($a,$b):bool{
    if (gettype($a) != 'integer' || gettype($b) != 'integer') {
        return false;
    }else{
        return true;
    }
}

$val1 = 10;
$val2 = 5;
$val3 = 2;
$val4 = 8;
$val5 = 7;
$val6 = 'foo';
$val7 = 'bar';



// affichage des resultats.
$resultat = nombres_entiers($val1,$val2);
var_dump($resultat);


$resultat = nombres_entiers($val3,$val4);
var_dump($resultat);


$resultat = nombres_entiers($val5,$val5);
var_dump($resultat);


$resultat = nombres_entiers($val6,$val2);
var_dump($resultat);


$resultat = nombres_entiers($val1,$val7);
var_dump($resultat);


$resultat = nombres_entiers($val6,$val7);
var_dump($resultat);