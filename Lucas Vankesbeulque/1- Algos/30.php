<?php
/* Donner le résultat de la multiplication de deux nombres en ne faisant que des additions

*/

//initialisation des variables 
$n = readline ('Entrez une note  :');
$n2 = readline ('Entrez une seconde note  :');
$s = 0;

//boucle 
for ($i=1; $i <=$n2 ; $i++) { 
    $s=$s + $n;
    echo $s;
    echo PHP_EOL; 
}
