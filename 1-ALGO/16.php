<?php
/*Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si
ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut
zéro).

On demande un nombre à l'utilisateur puis le compare à l'égalité 0.
Si c'est égale alors il dira que c'est égale à 0 sinon il testera si c'est 
positif ou négatif.

*/


$n = readline('Donnez un nombnre : ');

if ($n==0){
    echo 'Le nombre est nul';
}elseif ($n>0){
    echo 'Le nombre est positif';
}else{
    echo 'Le nombre est négatif';
}


?>