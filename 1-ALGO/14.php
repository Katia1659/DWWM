<?php
/*
Ecrire un algorithme qui demande deux nombres a l'utilisateur et l'informe ensuite si leurs produit est negatifs ou positif
(on laisse de coté le cas ou le poduit est nul). Attention toute fois : on ne doit pas calculer le procuit des deux nombres
*/

//inisilisation des var
echo 'debut';
echo "\n";
$nbUn = readline("Donnez un nb");
echo "\n";
$nbDeux = readline("Donnez un deuxieme nb");

//creation des conditions
if (($nbUn > 0 and $nbDeux > 0) or ($nbUn < 0 and $nbDeux < 0)) {
    echo 'le produit des deux et positif';
} else {
    echo 'negatif';
}

echo "\n";
echo 'fin';
?>