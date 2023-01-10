<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou negatif (on laisse de coté le cas ou le nombre vaut 0)
Ecrire "veuillez entrer un nombre"
lire nombre
si ce nombre> 0 alors
ecire "Le nombre est positif sinon
ecrire "le nombre est negatif
*/

$nombre = readline('Entrez un nombre :');
if ( $nombre > 0) {
    echo "le nombre est positif";
} else {
    echo "le nombre est negatif";
}
?>

