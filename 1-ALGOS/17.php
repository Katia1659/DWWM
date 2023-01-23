<?php

/* 

Exercice 17 

Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est négatif ou positif 

*/

// On demande deux nombres à l'utilisateur. 

$nb1 = readline ('Saisissez un premier nombre : ');
$nb2 = readline ('Saisissez un second nombre : '); 

// On affiche si le produit de ces nombres est positif, nul ou négatif 

if ($nb1 > 0 && $nb2 > 0 || $nb1 < 0 && $nb2 < 0) {
    echo 'Le produit de ces nombres est positif';
} 

elseif ( $nb1 == 0 || $nb2 == 0) {
    echo 'Le produit de ces nombres est égal à 0';
}

else {
    echo 'Le produit de ces nombres est négatif';
}


