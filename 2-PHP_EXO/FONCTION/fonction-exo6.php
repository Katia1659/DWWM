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

function adresse(string $numero, string $rue, string $code_postal, string $ville):string{
    $adresse = $numero.','.$rue.','.$code_postal.','.$ville;
    return $adresse;
}

$adresse = adresse('11','rue des muets','59116','houplines');
echo $adresse;
