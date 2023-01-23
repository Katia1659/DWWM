<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro). 
*/
$nbOne = readline("Entrez un nombre");
$nbTwo = readline("Entrez un nombre");
if ($nbOne>0 and $nbTwo>0 || $nbOne<0 and $nbTwo<0) {
    echo "Le produit des deux nombres est positif";
} elseif ($nbOne<0 and $nbTwo>0 or $nbOne>0 and $nbTwo<0) {
    echo " Le produit des deux nombres est négatif";
} else {
    echo "Le produit des deux nombre est null";
}
?>