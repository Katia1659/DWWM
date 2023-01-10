<?php
/* ecrire un algorithme qui demande l'age d'un enfant à l'utilisateur. Ensuite, il informe de sa catégorie

ecrire "entrez votre age
lire age
si age <= 7 
ecrire "vous etes poussin"
si age <= 9 
ecrire "vous etes pupille"
si age <= 11 
ecrire "vous etes minime"
si age >= 12 
ecrire "vous etes cadet"
*/

$age = readline ('Entrez votre age :');

if ($age < 6) {
    echo "vous etes trop jeune";
}elseif ($age <= 7) {
    echo 'vous etes poussin';
}elseif ($age <= 9) {
    echo 'vous etes pupille';
}elseif ($age <= 11) {
    echo 'vous etes minime';
}else {
    echo 'vous etes cadet';
}