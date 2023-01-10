<?php
/* ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou n"gatif (on inclut cette fois le traitement du cas ou le nombre vaut zéro)
ecrire "mettre un nombre"

si nombre >superieur a 0 alors
ecrire "le nombre est positif
sinon si nombre < 0 alors
ecrire "le  nombre est négatif"
sinon si nombre == 0 alors
ecrire "nombre est egal a 0"
*/
$nombre1 = readline('Entrez un nombre :');
if ($nombre1 > 0 ) {
    echo 'le nombre est positif';
}elseif ($nombre1 < 0) {
    echo 'le nombre est negatifs';
}elseif ($nombre1 == 0) {
    echo 'le nombre vaut 0';
}
?>