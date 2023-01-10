<?php

/* 
Quel resultat produit le programme suivant ?

Algorithme double;
Var Val, Double, entier;
Debut
    Val <- 231;
    carré <- Val * Val;
    Ecrire (Val);
    Ecrire (carré);
Fin


*/
//demande un nombre à l'utilisateur 
$val = readline("nombre : ");

//calcule le carré
$carré = $val * $val;

//afiche le carré
echo $carré;
echo "\n";

echo "Le programme suivant donne le carré du nombre donné.";

?>