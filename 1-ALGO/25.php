<?php
/* Ecrire un algorithme saisissant 2 variables entières qui calcule et
affiche leur moyenne.
lire nb1
lire nb2
afficher ((nb1+nb2)/2)
*/

// on demande les notes
$nb1 = readline('Entrez un nombre : ');
$nb2 = readline('Entrez un nombre : ');

// affichage du resultat
echo " la moyenne est de : ";
echo (($nb1 + $nb2)/2);
?>