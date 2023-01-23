<?php
/*
Ecrire un algorithme qui demande un nombre a l'utilisateur, et l'informe ensuite si ce nombre est positif ou negatif (on laisse de coté le cas
ou le nombre vaut zero)

debut
    lire 'debut'
    ecire 'nb'
    si (nb>0)
        lire positif
    si (nb>0)
        lire negatif
lire fin

*/

//inisilisation des var
echo 'debut';
echo"\n";
$nb = readline('donnez un nb');
echo "\n";

//creation des conditions
if ($nb > 0){
    echo 'votre nombre et positif';
};
if ($nb < 0){
    echo 'le nombre et negatif';
};
echo "\n";
echo 'fin';
    


?>