<?php
/* Ecrire un programme qui demande un nombre à l'utilisateur, puis qui calcule et affiche le carré de ce nombre
début
ecrire "entrer un nombre"
lire(a)
b = a * a
ecrire(b)
fin
*/

echo 'début';
echo "\n";

$a = readline('entrez un nombre :');

echo "\n";

$b = $a * $a ;
echo $b;
echo "\n";

echo 'fin';
?>