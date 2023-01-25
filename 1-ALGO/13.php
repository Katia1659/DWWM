<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif 
(on laisse de côté le cas où le nombre vaut zéro).

Debut
lire a 
 si a >0 ecrire ce nombre est positif
 si a <0 ecrire ce nombre est negatif
 fin
*/

$a = readline('entrez un nombre : ');
if ($a>0) {
    echo 'Le nombre est positif';
}
else {
    echo 'le nombre est negatif';
}

?>