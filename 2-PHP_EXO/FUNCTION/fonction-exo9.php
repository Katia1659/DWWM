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

/**écrire une fonction nommée `a_plus_grand_b` qui :

- prend un paramètre nommé `$a`
- prend un paramètre nommé `$b`
- renvoit `false` si le paramètre `$a` n'est pas un nombre entier
- renvoit `false` si le paramètre `$b` n'est pas un nombre entier
- renvoit `1` si `$a` est plus grand que `$b`
- renvoit `-1` si `$a` est plus petit que `$b`
- renvoit `0` si `$a` et `$b` sont égaux */

function a_plus_grand_b (mixed $a, mixed $b) : mixed {
    switch (true) {
        case  !is_int($a) or !is_int($b):
            return false;
            break;

        case $a>$b :
            return 1;
            break;

        case $a < $b :
            return -1;
            break;
        
        case  $a == $b :
            return 0;
            break;
        
    }
}

/**appeler la fonction avec les paramètres `10` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */

echo "paramètres `10` et `5`"."\n";
$a=10;
$b=5;
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);


/**appeler la fonction avec les paramètres `2` et `8`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */

echo "paramètres `2` et `8`"."\n";
$a=2;
$b=8;
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);

/**appeler la fonction avec les paramètres `7` et `7`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */

echo "paramètres `7` et `7`"."\n";
$a=7;
$b=7;
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);

/**appeler la fonction avec les paramètres `'foo'` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */

echo "paramètres `'foo'` et `5`"."\n";
$a='foo';
$b=7;
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);


/**appeler la fonction avec les paramètres `10` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */
echo "paramètres `10` et `bar`"."\n";
$a=10;
$b='bar';
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);


/**appeler la fonction avec les paramètres `'foo'` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump` */
echo "paramètres `foo` et `bar`"."\n";
$a='foo';
$b='bar';
$resultat=a_plus_grand_b($a,$b);
var_dump($resultat);

?>

