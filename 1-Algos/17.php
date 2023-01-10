<?php
/*Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est négatif ou positif 
(on inclut cette fois le traitement du cas où le prduit peut être nul).
début
 écrire "entrer un nombre"
lire(a)
écrire "entrer un nombre"
lire(b)
Si a > 0 alors
    Si b > 0 alors 
    écrire "le produit est positif"
    Si b < 0 alors
    écrire "le prduit est négatif"
    fin si
Si a < 0 alors
    Si b < 0 alors
    écire "le prduit est positif"
    Si b > 0 alors
    écrire "le produit est négatif"
    fin si
Si a == 0 alors 
    écrire "le produit est nul"
Si b == 0 alors
    écrire "le produit est nul"
fin  si
fin
*/
echo 'début';
echo "\n" ;
$a = readline('entrer un nombre') ;
echo "\n" ;
$b = readline('entrer un nombre') ;
echo "\n" ;

if ($a > 0) {
    if ($b > 0) {
        echo "le produit est positif" ;
    }
    if ($b < 0) {
        echo "le produit est négatif" ;
    }
}
if ($a < 0) {
    if ($b < 0) {
        echo "le produit est positif" ;
    }
    if ($b > 0) {
        echo "le produit est négatif" ;
    }
}
if ($a == 0) {
        echo "le produit est nul" ;
}
if ($b == 0) {
        echo "le produit est nul" ;
}
echo "\n" ;
echo 'fin' ;
?>