<?php
/*
• Ecrire un algorithme qui demande un nombre de départ, et qui
calcule sa factorielle.
*/

//inisilisation des var
echo 'debut';
$nombre = readline('Entrez un nb');
$fact = 1;

//creation de la boucle for
for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
echo $nombre ;
echo "\n";
echo $fact;
echo 'fin';
?>