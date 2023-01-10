<?php

/* Ecrire un algoritme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre et positif ou negatif ( on laisse de coté le cas où le nombre vaut 0).

Debut
    Ecrire ( entrez un nombre)
    lire nb
    SI nb < 0 
        ALORS ecrire "ce nombre est negatif"
    FinSi

    SI nb > 0 
        ALORS ecrire "ce nombre est positif"
    FinSi
Fin
*/

//demande un nombre à l'utilisateur 
$nb = readline("entrez un nb : ");
$nb0 = 0;

//afiche si le nombre est positif ou negatif
if($nb < $nb0) {
    echo "le nombre est negatif";
};

if ($nb > $nb0) {
    echo "le nombre est positif";
};

?>

