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

// fonction qui renvoie l'adresse que vous avez entrer. 
function adresse(int $numero,string $rue, int $code_postal, string $ville):string{
    return "Votre adresse : $numero, $rue, $code_postal, $ville"; 
}


$numRue = readline('Veuillez entrer le numéro de la rue : ');
$rue = readline('Veuillez entrer la rue : ');
$cp = readline('Veuillez entrer le code postal : ');
$ville = readline('Veuillez entrer la ville : ');

echo adresse($numRue,$rue,$cp,$ville);