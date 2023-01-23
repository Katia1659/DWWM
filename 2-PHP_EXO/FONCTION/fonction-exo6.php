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

//on définit la fonction
function adresse(int $numero, string $rue, int $code_postal, string $ville): string{
    $adresse = $numero. ', '. $rue. ', '. $code_postal. ', '. $ville;
    return $adresse;
}

//on appelle la fonction

echo adresse(59, 'rue la marée chaussée', 62000, 'Abidbol');