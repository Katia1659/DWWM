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

//Initialisation de la fonction
function adresse(int $num, String $rue, int $code_postal, String $ville) : String {

    return $num.", ".$rue.", ".$code_postal.", ".$ville;

}

$num = 6;
$rue = 'de la fontaine';
$codePostal = 59151;
$ville = 'Estrées';

//Affichage de la fonction
echo adresse($num,$rue,$code_postal,$ville);