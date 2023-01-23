<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console

*/


// écrire une fonction nommée `message`:
function message (string $var) : string {
    $var = $var."\n";
    return $var;
}

//appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console:
$var = 'Php 5.6';
$varf = message($var);
echo $varf;


?>
