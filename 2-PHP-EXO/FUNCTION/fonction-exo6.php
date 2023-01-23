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

// écrire une fonction nommée `adresse` :
function adresse (int $numero, string $rue, int $code_postal, string $ville ): string{
    
    $rest = "$numero, $rue, $code_postal, $ville";
    return $rest;
}

$numRue= 101;
$nomRue='Avenue de Verdun';
$codPostal = 59100;
$ville='Roubaix';

// appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat:

$adress=adresse($numRue, $nomRue, $codPostal, $ville);

echo $adress;
?>
