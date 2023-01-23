<?php
/*Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie :
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de 10 à 11 ans
• "Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce
résultat ?

Dans un premier temps on demande l'age de l'utilisateur, par la suite on test au fur et à 
mesure les tranches d'âge.

*/

$age = readline('Veuillez entrer votre âge : ');

if ($age<6){
    echo ('Vous êtes trop jeune.');
}elseif ($age>5 and $age<8){
    echo ('Vous êtes dans la catégorie Poussin.');
}elseif ($age>7 and $age<10){
    echo ('Vous êtes dans la catégorie Pupille');
}elseif ($age>9 and $age<12){
    echo ('Vous êtes dans la catégorie Minime');    
}else{
    echo('Vous êtes dans la catégorie Cadet');
}


?>