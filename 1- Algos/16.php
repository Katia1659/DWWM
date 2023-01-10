<?php
/*
Ecrire un algortithme qui demande un nombre a l'utilisateur et l'informe ensuite si ce nombre est positif ou negatif 
(on inclut cette fois le traitment du as ou le nombre vaut zero)

ecrit debut
    nb = lire
    si nb == 0 
        nb nul
    si nb < 0
        nb negatif
    si nb > 0
        nb positif
ecrit fin 
*/

//inisilisation des var
echo 'debut';
echo"\n";
$nb = readline('donnez un nb ');
echo "\n";

//cration des conditions
if ($nb == 0){
    echo 'votre nombre et nul';
}
if ($nb < 0){
    echo 'le nombre et negatif';
}
if ($nb > 0){
    echo 'le nombre et positif';
}
echo "\n";
echo 'fin';
?>
