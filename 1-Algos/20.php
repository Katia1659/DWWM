<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. 
Par exemple, si l'on entre 5, le programme doit calculer: 1+2+3+4+5=15
début
écrire "entrer un nombre"
lire(a)
b = 1
somme = 0
Pour i allant de 1 à a
    somme = somme + b
    b = b + 1
*/

$a = readline ('entrez un nombre :');
$b = 1 ;
$somme = 0 ;
for ($i=0; $i < $a; $i++) { 
    $somme = $somme + $b ;
    $b = $b + 1 ;
}
echo $somme ;
?>