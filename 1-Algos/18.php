<?php
/*Ecrire un algorithme  qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie:
    Poussin de 6 à 7 ans
    Pupille de 8 à 9 ans
    Minime de 10 à 11 ans
    cadet après 12 ans
Peut-on concervoir plusieurs algorithme équivalents menant à ce résultat?
*/
$a = readline ('entrez l age du candidat :');

if ($a == 6 or $a == 7) {
    echo 'le joueur est un poussin';
} else {if ($a == 8 or $a == 9){
    echo 'le joueur est un pupille';
} else if ($a == 10 or $a == 11){
    echo 'le joueur est un minime';
} else if ($a > 11){
    echo 'le joueur est un cadet';
} else {
    echo 'Le joueur est or categorie';
}
}
?>