<?php
/*Ecrire un algorithme qui demande un nombre à l'utilisateur,
et l'informe ensuite si ce nombre est positif ou négatif (on
laisse de côté le cas où le nombre vaut zéro).

On va demander un nombre n à l'utilisateur.
On va par la suite utiliser un if pour savoir si le nombre est positif ou non.

*/

$nombre = readline('Donnez un nombre : ');

if ($nombre>0){
    echo 'Le nombre est positif';
}elseif ($nombre<0){
    echo 'Le nombre est négatif';
}




?>