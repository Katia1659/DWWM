<?php
/*Ecire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres.
début
écrire "entrer un nombre"
lire(a)
temp <- a
Pour i <- 1 à 19
    écrire "entrer un nombre"
    lire(a)
    Si a > temp
        temp <- a
    fin si
fin pour
lire temp
fin
*/
$a = readline ('entrez un nombre :');
$temp = $a ;
for ($i=0; $i < 19; $i++) { 
    $a = readline ('entrez un nombre :');
    if ($a > $temp) {
        $temp = $a ;
    }
}
echo $temp ;
?>