<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côté le cas ou le nombre vaut zéro). 
*/
$nb = readline ("Entrez un nombre");
if ($nb >0) {
    echo "$nb est un nombre positif";
}
else {
    echo " $nb est un nombre négatif";
}
?>