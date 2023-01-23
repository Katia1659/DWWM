<?php


/* 
Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est negatif ou posiif 
( on inclut cette fois le traitement du cas où le produit peut etre nul).


*/

// demande 2 nombres
$nb1 = readline("entrez un nombre");
$nb2 = readline("entrez un nombre");


// sans calculer il affiche si le produit est positif ou negatif
if ( ($nb1 > 0 and $nb2 > 0) OR ($nb1 < 0 and $nb2 < 0)) {
    echo "le produit est positif";
} 

if ( $nb1 < 0 and $nb2 > 0 ) {
    echo "le produit est negatif";  
};

if ( $nb1 == 0 OR $nb2 == 0) {
    echo "le produit est nul";
}

?>