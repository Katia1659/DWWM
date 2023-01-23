<?php

/*
Ecrire un algorithme qui demande à l'utilisateur, et l'informe ensuite si ce nombre est positif ou negatif
( on inclut cete fois le traitement du cas où le nombre vaut zero)

*/

//demande un nombre à l'utilisateur
$nb = readline("entrez un nb");

// afiche si ce nombre est positif ou negatif ou nul
if ($nb < 0 ){
    echo "ce nombre est negatif";
}

if ($nb > 0 ) {
    echo "ce nombre est positif";
} 

if ( $nb == 0 ) {
    echo "ce nombre est nul";
}

?>