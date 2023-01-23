<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console

*/

//Initialisation de la fonction
function message (String $Str1) : String {

    return $Str1."\n";
}

//Affichage de la fonction
echo message('Php 5.6');