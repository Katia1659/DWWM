<?php
/*
• Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie :
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de 10 à Il ans
• "Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce
résultat ?

debut
    age = lire
    si age < 6 
        ecrire trop jeune
    si age >= 6 and age <= 7 
        ecrire poussin
    si age >= 8 and age <= 9
        ecrire pupille
    si age >= 10 and age <= 11
        ecrire minime
    si age >= 12
        ecrire cadet 

*/

//inisilisation des var
echo 'debut';
echo "\n";
$age = readline ('donnez lage');

// creation des condition
if ($age < 6) {
    echo 'trop jeune';
} else
    if ($age >= 6 and $age <= 7) {
        echo 'Poussin';
     } else
        if ($age >= 8 and $age <=9) {
            echo 'pupille';
        } else
            if ($age >= 10 and $age <=11){
                echo 'minime';
            } else
            if ($age >= 12){
                echo 'cadet';
            }
            

    

   
    
?>
