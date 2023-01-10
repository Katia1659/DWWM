<?php
/*
Ecrire un algorithme qui demande successivement 20 nombres à
l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces
20 nombres.
*/

//inisilisation des var
$nbGrand ='';
$nb = '';
$i = '';
echo 'debut';

//creation de la boucle for
for ($i=0; $i <= 20 ; $i++) {
    $nb = readline('entrez un chiffre');

        if ($nb > $nbGrand) {
            $nbGrand = $nb;
        }
};
echo "\n";
echo $nbGrand;