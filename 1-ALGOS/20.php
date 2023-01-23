<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, le programme doit calculer: 1+2+3+4+5=15 

Var nb, resultat,i ;
    debut
        Ecrire "Veuillez saisir un nombre";
        Lire nb;
        resultat=0;
        Pour i allant de 1 à nb;
            resultat=resultat+i;
        FinPour
        Ecrire resultat;
    fin

*/

$nb=readline('Veuillez saisir un nombre : ');
$resultat=0;
for ($i=1; $i <= $nb; $i++) { 
    $resultat=$resultat+$i;
        
}
echo $resultat ;
?>