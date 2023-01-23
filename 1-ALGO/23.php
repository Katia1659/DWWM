<?php
/*Réécrire l'algorithme précédent, mais cette fois-ci on ne connaît pas d'avance combien l'utilisateur souhaite saisire de nombres. 
La saisie des nombres sarrête lorsque l'utilisateur entre un zéro.
début
écrire "entrer un nombre"
lire(a)
temp <- a
p <- 1
i <- 2
Tant que a != 0
    écrire "entrer un nombre"
    lire(a)
    Si a > temp
        temp <- a
        p <- i        
    fin si
    i <- i + 1
fin tant que
lire temp
fin
*/
$a = readline ('entrez un nombre :');
$temp = $a ;
$place = 1 ;
$i = 2 ;
while ($a != 0) {
    $a = readline ('entrez un nombre :');
    if ($a > $temp) {
        $temp = $a ;
        $place = $i ;
    }
    $i = $i + 1 ;
}
echo 'la plus grande valeur est ';
echo $temp ;
echo "\n" ;
echo 'la place de la plus grande valeure' ;
echo $place ;
?>