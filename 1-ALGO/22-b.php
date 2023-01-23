<?php
/*
Modifiez ensuite l'algorithme pour que le programme affiche de
surcroît en uelle position avait été saisie ce nombre.
*/

//inisilisation des var
$nbGrand ='';
$nb = '';
$i = '';
$position = '';
echo 'debut';

//creation de la boucle for
for ($i=0; $i <= 20 ; $i++) {
    $nb = readline('entrez un chiffre');

        if ($nb > $nbGrand) {
            $nbGrand = $nb;
            $position = $i ;
        }
        
};
echo "\n";
echo $nbGrand;
echo "\n";
echo $position;
?>