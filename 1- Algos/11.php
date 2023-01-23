<?php
/* 
Ecrire un programme qui demande un nombre à l'utilisateur puis qui calcule et affiche le carré de ce nombre. 

a = saisie
a = a*a 
a = 4 
*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables
$a = readline("un nombre : ");
// calcul des valeurs
$a = $a * $a;
echo 'Le carré de ce nombre : ';
echo PHP_EOL;
echo $a . PHP_EOL;

echo 'Fin';
echo PHP_EOL;
