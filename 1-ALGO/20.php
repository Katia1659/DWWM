<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui
calcule la somme des entiers jusqu'à ce nombre. Par exemple, si
l'on entre 5, le programme doit calculer : I + 2 + 3 + 4 + 5 = 15 
Debut
somme=0
lire nb
pour i allant de 0 a nb
    i++
    somme = (somme + i)
    ecrire somme
Fin
*/
$somme = 0 ;
$nb = readline("entrez un nombre : ");
for ($i = 0; $i <= $nb ; $i++) { 
    $somme = ($somme + $i);
}
echo $somme;
?>