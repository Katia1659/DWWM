<?php
/*écrire un algorithme saisissant 2 variables entières qui calcule et affiche leur moyenne

ecrire "mettre nombre"
ecrire "mettre second nombre"
moyenne = 0

moyenne = n + n2 /2
*/

//initianlisation des variables
$n = readline ('Entrez un nombre :');
$n2 = readline ('Entrez un second nombre :');
$moyenne=0;

//debut algorithme
$moyenne= ($n + $n2) / 2;
echo $moyenne;