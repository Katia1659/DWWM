<?php

/* Que produit l'algorithme suivant ? 
Var a, b, c : Caractères
    début 
        a = "423"; 
        b = "12";
        c = a & b;
    fin

$a = "423"; 
$b = "12";
$c = $a & $b;

echo $c;

L'algorithme, pour la variable c, affiche les variables a et b l'une à côté de l'autre. 

*/

$a = "423"; 
$b = "12";
$c = $a . $b;

echo $c;
?>