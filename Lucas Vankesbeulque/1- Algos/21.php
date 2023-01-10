<?php
/*Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle

*/

$nombre = readline ('Entrez un nombre :');
$fact = 1;


for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
echo $fact;


