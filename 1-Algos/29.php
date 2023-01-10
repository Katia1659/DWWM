<?php
/*Ecrire un algorithme qui demande un nombre, calcule et affiche la somme cubique.
*/

$a = readline('entrer la valeur');

$somme = 0 ;
//On initialise la somme

for ($i=1; $i <= $a; $i++) { 
    $somme = $somme + $i**3 ;
    //on additionne les entiers (pris à la puissance 3)
}

echo $somme ;
?>