<?php

/*

écrire une fonction nommée `adresse` qui :

- prend un paramètre nommé `$numero`
- prend un paramètre nommé `$rue`
- prend un paramètre nommé `$code_postal`
- prend un paramètre nommé `$ville`
- concatène (met bout à bout, chaîne) tous les paramètres en les séparant d'une virgule suivie d'un espace `', '`
- renvoit le paramètre

appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat

*/
function adresse (int $numero, string $rue, int $code_postal, string $ville) : string{
    return $numero.', '.$rue.', '.$code_postal.', '.$ville;
}

echo adresse (8, 'Rue Arthur Buyse', 59250, 'Wasquehal');