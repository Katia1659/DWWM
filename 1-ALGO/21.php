<?php
/*
Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
début
écrire "entrer un nombre"
lire(a)
fac <- 1
pour i <- 1 à a
    fac <- fac * i
    fin pour
écrire fac
fin
*/
$a = readline ('entrez un nombre :');
$fac = 1 ;
for ($i=1; $i <= $a; $i++) { 
    $fac = $fac * $i ;
}
echo $fac ;
?>