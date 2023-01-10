<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).
Var nb; 
    début
        Ecrire "Saisissez un :"; 
        Lire nb;
        DébutSi
        Si nb>0 Alors
            Ecrire "Ce nombre est positif"
        Si nb<0 Alors
            Ecrire "Ce nombre est negatif"
        Sinon 
            Ecrire "Ce nombre est nul"
        Finsi
    fin
 
$nb= readline('Saisissez un nombre');

if ($nb>0) {
    echo "Le nombre et positif";
} elseif ($nb<0) {
    echo "Le nombre est négatif";
} else { 
    echo "le nombre est positif";

}
*/

$nb= readline('Saisissez un nombre');

if ($nb>0) {
    echo "Le nombre et positif";
} elseif ($nb<0) {
    echo "Le nombre est négatif";
} else { 
    echo "le nombre est positif";

}


?>