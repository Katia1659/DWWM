<?php
/*
Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, le programme doit calculer : 1+2+3+4+5=15

ecrire 'mettre un nombre

*/

$n = readline ('Entrez un nombre :');
$somme=0;

for ($i=0; $i <$n ; $i++) { 
    $somme=$somme+$n;
    $i++;
}
echo $somme;



