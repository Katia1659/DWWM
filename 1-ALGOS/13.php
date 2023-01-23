<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côté où le nombre vaut zéro).
Var nb; 
    début
        Ecrire "Saisissez un :"; 
        Lire nb;
        DébutSi
        Si nb>0 Alors
            Ecrire "Ce nombre est positif"
        Sinon
            Ecrire "Ce nombre est negatif"
        Finsi
    fin
 
$nb= readline('Saisissez un nombre');
if ($nb>0) {
    echo 'ce nombre est positif';
} else {
     echo "ce nombre est negatif";
}


*/

$nb= readline('Saisissez un nombre');
if ($nb>0) {
    echo 'ce nombre est positif';
} else {
     echo "ce nombre est negatif";
}


?>