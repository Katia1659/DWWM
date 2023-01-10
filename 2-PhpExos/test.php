<?php
/* bloc 4 bloc 4 résultat attendu : $variable est un nomnbre entier */
$variable = array();

switch (true) {
    case (is_string($variable)):
        echo "$variable est une chaîne de caractères";
        break;
    case (is_float($variable)):
        echo "$variable est un nombre à virgule flottante";
        break;
    case (is_array($variable)):
        echo '$variable est une liste ';
        break;
    case (is_int($variable)):
        echo "$variable est un nomnbre entier";
        break;
}
