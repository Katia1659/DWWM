<?php
/*Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).
écrire "entrer un nombre"
lire(a)
Si a > 0 alors
    écrire "le nombre est positif"
Si a < 0 alors 
    écire "le nombre est négatif"
Si a == 0 alors
    écrire "le nombre est nul"
fin si
fin
*/
echo 'début';
echo "\n" ;
$a = readline('entrer un nombre') ;
if ($a > 0) {
    echo "le nombre est positif";
}
if ($a < 0) {
    echo "le nombre est négatif";
}
if ($a == 0) {
    echo "le nombre est nul" ;
}
echo "\n" ;
echo 'fin' ;
?>