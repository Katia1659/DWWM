<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/

// fonction qui return un message en fonction si le boolean est  true ou false.
function ouiNon(bool $ouiNon){
    if ($ouiNon) {
        return 'Oui';
    }else {
        return 'Non';
    }

}


$oui = true;
$non = false;

echo ouiNon($oui);
echo ouiNon($non);