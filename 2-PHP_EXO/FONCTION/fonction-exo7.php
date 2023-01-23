<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/

function ouiNon(bool $param) : string {
    if ($param == true) {
        return 'oui';
    } elseif ($param == false) {
        return 'non';
    }
   
} 

$rep=true;
$rep=ouiNon($rep);
echo $rep;

echo "\n" ;

$rep=false;
$rep=ouiNon($rep);
echo $rep;

?>