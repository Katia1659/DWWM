<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/

//Initialisation de la fonction
function ouiNon(bool $para) : String {

    if ($para == true) {

       return 'OUI';

    } else {

        return 'NON';
    }
   
}
   
//Affichage de la fonction
echo ouiNon(true)."\n";
//Affichage  de la fonction
echo ouiNon(false);