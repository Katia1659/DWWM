<?php


/* 
Ecrire un algorihme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est negatif ou positif
( on laisse de coté le cas où le produit est nul). attention toutefois on ne doit pas calculer le produit des deux nombres.

*/

//demande 2 nombre à l'utilisateur
$nb1 = readline("entrez un nombre");
$nb2 = readline("entrez un nombre");

//affiche si le produit est positif ou negatif sans calculer
if ( $nb1 < 0 and $nb2 < 0 ) {
    echo "le produit est negatif";
}

if ( $nb1 > 0 and $nb2 > 0 ) {
    echo "le produit est positif";
}

?>