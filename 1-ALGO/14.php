<?php
/*Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de coôté le cas où le produit est nul).
 Attention toutefois: on ne doit pas calculer le produite des deux nombres.
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

/*AUTRE SOLUTION
if(($a>0 and $b>0) or ($a<0 and $b<0)) {
    echo "le produit est positif";
} else {
    echo "le produit est negatif";
}

?>
*/
?>

