<?php
/* Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul).
Attention toutefois : on ne doit pas calculer le produit des deux nombres.*/ 
$nbOne = readline ("Entrez le premier nombre");
$nbTwo = readline ("Entrez le second nombre ");

if ($nbOne >0 and $nbTwo>0 or $nbOne<0 and $nbTwo<0) {
    echo "Le produit des deux nombres est positif";
} else {
    echo "Le produit des deux nombres est negatif";
}

?>