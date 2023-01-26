<?php
/* 
• Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il I 'informe de Sa catégorie :
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de IO à Il ans
• "Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce
résultat ?
*/ 


$age = readline("entrez l'age : ");
if ($age < 6){
    echo "Trop jeune";
} 
else {
    if ($age >= 6 and $age <=7) {
        echo "Poussin";
    }
    else {
        if ($age >= 8 and $age <= 9) {
            echo "Pupille";
        }
        else {
            if ($age >= 10 and $age <=11) {
                echo "Minime";
            }
            else {
                echo "Cadet";
            }
        }
    }
}

/* oui on peut concevoir plusieurs algo menant a ce resultat */
?>