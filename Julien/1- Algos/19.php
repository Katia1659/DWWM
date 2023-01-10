<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, si l'utilisateur entre le 
nombre 17, le programme affichera les nombres de 18 à 27.
*/

$i=1;
for ( $nb = readline ("Entrez un nombre : "); $nb ++; $i ++ ){
    if ($i<=10) {
        echo $nb;
        echo "\n";
    }
            else {
            }
}
?>