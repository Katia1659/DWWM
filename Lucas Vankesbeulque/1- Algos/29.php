<?php
/* ecrire un algorithme qui demande un nombre, calcul et affiche la somme ∑

*/

//initialisation des variables
$n = readline ('Veuillez entrer un nombre  :');
$s=0;

//boucle
for ($i = 1; $i <= $n; $i++) { 
    $s= $s + $i * $i * $i;
    echo $s;
    echo PHP_EOL; 
}



