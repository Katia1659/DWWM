<?php
/* Ecrire un algorithme qui demande l'âge de l'enfant à un utilisateur. Ensuite, il informe de sa catégorie :
    - "Poussin" de 6 à 7 ans
    - "Pupille" de 8 à 9 ans
    - "Minime" de 10 à 11 ans
    - "Cadet" après 12 ans
    Peut-on concevoir plusieurs algorythmes équivalents menants à ce résultat ?*/
    $age = readline( "Entrez l'âge de l'enfant : ");
    if ($age < 6 ) {
        echo "Trop petit pour les catégories";
    }
    else {
        if ($age == 6 or $age == 7){
            echo "Catégorie Poussin";
        }
        else {
            if ($age == 8 or $age == 9) {
                echo " Catégorie Pupille";
            }
            else {
                if ($age == 10 or $age == 11 ){
                    echo "Catégorie Minime";
                }
                else {
                    if ($age > 12) {
                        echo "Catégorie Cadet";
                    }
                }
            } 
            }
    }
?>