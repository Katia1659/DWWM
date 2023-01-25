<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui
ensuite affiche les dix nombres suivants. Par exemple, si
l'utilisateur entre le nombre 17, le programme affichera les
nombres de 18 à 27.
Debut
lire nb
pour i allant de nb+1 a nb+10 
i++
ercire i 
 */ 
$nb = readline("Entrez un nombre : ");
for ($i = $nb + 1 ; $i <= $nb + 10; $i ++) { 
    echo $i ;
    echo PHP_EOL;
}
?>