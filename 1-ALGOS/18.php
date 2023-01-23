<?php

/* Exercice 18 

Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur. Ensuite, il l'informe de sa catégorie : 
    - "Poussin" de 6 à 7 ans
    - "Pupille" de 8 à 9 ans
    - "Minime" de 10 à 11 ans
    - "Cadet" après 12 ans
Peut-on conceovir plusieurs algorithmes équivalents menant à ce résultat ? 

*/

// On demande l'âge d'un enfant afin de déterminer dans quelle catégorie sportive il se trouve. 

$age = readline("Saisissez l'âge de l'enfant : ");

if ($age >= 6 && $age <= 7) {
    echo 'Catégorie Poussin';
}

else if ($age >=8 && $age <= 9) {
    echo 'Catégorie Pupille';
}

else if ($age >= 10 && $age <= 11) {
    echo 'Catégorie Minime';
}

else if ($age >= 12 && $age <= 15) {
    echo 'Catégorie Cadet';
}

else 
    echo 'Catégorie non répertoriée'; 


    