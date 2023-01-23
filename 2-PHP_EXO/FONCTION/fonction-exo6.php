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

function adresse (string $numero, string $rue, string $code_postal, string $ville) : string {
    return $numero.", ".$rue.", ".$code_postal.", ".$ville;
}

$numero='62';
$rue= 'rue de Madagascar';
$CP='59140';
$ville='Lille';

$adresse=adresse($numero,$rue,$CP,$ville);
echo $adresse;
?>

