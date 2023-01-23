<?php
/*Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombre suivants. 
Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.
début
écrire "entrer un nombre"
lire(a)
pour i allant de 1 à 10
    a = a + 1
    écrire a
    fin pour
fin
*/
$a = readline ('entrez un nombre :');
for ($i = 0; $i < 10 ; $i++) { 
    $a = $a + 1 ;
    echo $a ;
    echo "\n" ;
}
?>