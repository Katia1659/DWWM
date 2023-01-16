<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/

//on cree la fonction
function ouiNon(bool $on):string{
if ($on == true) {
    return 'oui';
}
else {
    return 'non';
}
}

// on appelle la fonction pour le cas true et affiche le resultat
$a = true;
$res = ouiNon($a);
echo $res."\n";

// on appelle la fonction pour le cas false et affiche le resultat
$a = false;
$res = ouiNon($a);
echo $res."\n";