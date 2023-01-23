<?php
/*Ecrire un alogrithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie:
    -"Poussin" de 6 à 7ans 
    -"Pupille" de 8 à 9ans 
    -"Minime" de 10 à 11ans
    -"Cadet" après 12ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat? 
Réponse : Il est possible de concevoir cet algorithme de plusieurs façon par exemple avec une condition between.

Var age;
    début
        Ecrire "Veuillez saisir l'âge de l'enfant";
        Lire age;
        DebutSi
        Si age=7 et age=6 Alors 
            Ecrire "Poussin"
        SinonSi age=9 et age=8 Alors
            Ecrire "Pupille"
        SinonSi age=11 et age=10 Alors
            Ecrire "Minime"
        Sinon age>=12
            Ecrire "Cadet"
        Finsi
    fin

$age = readline('Veuillez saisir lâge de lenfant : ');

if ($age==7 or $age==6) {
    echo "Poussin";
} else 
    if ($age==9 or $age==8) {
   echo "Pupille" ;
    }
    if ($age==11 or $age==10) {
        echo "Minime" ;
    }
    if ($age>=12) {
        echo "Minime" ;
    }        
    
    
    */

$age = readline('Veuillez saisir lâge de lenfant : ');

if ($age==7 or $age==6) {
    echo "Poussin";
} else 
    if ($age==9 or $age==8) {
   echo "Pupille" ;
    }
    if ($age==11 or $age==10) {
        echo "Minime" ;
    }
    if ($age>=12) {
        echo "Minime" ;
    }        

?>

