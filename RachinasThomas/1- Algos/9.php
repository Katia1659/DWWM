<?php

/* 
Que produit l'algoritme suivant ?

Var A, B, C : Caractères

Debut
    A <- "423"; 
    B <- "12" ; 
    C <- A & B;
Fin
*/

// affecte une valeur à C
$a = "423";
$b = "12";
$c = $a.$b;

//affiche le resultat de la concatenation
echo "Debut";
echo "\n";

echo $c; 
echo "\n";

echo "Fin";
echo "\n";

echo "Cet algorithme produit une concatenation des deux variables";

?>