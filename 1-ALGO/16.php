<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou
négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).
Debut
lire a 
 si a = 0 ecrire ce nombre est nul
 si a >0 ecrire ce nombre est positif
 sinon ecrire ce nombre est negatif
 fin
*/
$a = readline('entrez un nombre : ');
if ($a == 0) {
    echo 'ce nombre est nul';
} 
else 
if ($a > 0) {
    echo ' ce nombre est positif';
}
else {
    echo 'ce nombre est negatif';
}