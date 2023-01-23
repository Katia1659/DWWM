<?php
/*Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre
début
écrire "entrer un nombre"
lire(a)
temp <- a
p <- 1
Pour i <- 2 à 20
    écrire "entrer un nombre"
    lire(a)
    Si a > temp
        temp <- a
        p <- i
    fin si
fin pour
lire temp
fin
*/
$a = readline ('entrez un nombre :');
$temp = $a ;
$place = 1 ;
for ($i=2; $i < 21; $i++) { 
    $a = readline ('entrez un nombre :');
    if ($a > $temp) {
        $temp = $a ;
        $place = $i ;
    }
}
echo $temp ;
echo $place ;
?>