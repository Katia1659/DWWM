<?php

/* 

Exercice 14 

Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres */

// On demande deux nombres à l'utilisateur. 

$nb1 = readline ('Saisissez un premier nombre : ');
$nb2 = readline ('Saisissez un second nombre : '); 

// On affiche si le produit des nombres est positif, ou négatif. 

if ($nb1 > 0 && $nb2 > 0 || $nb1 < 0 && $nb2 < 0 ) {
    echo 'Le produit de ces nombres est positif';
} 

else  {
    echo 'Le produit de ces nombres est négatif';
}
