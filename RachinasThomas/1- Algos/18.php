<?php

/*
Ecrire un algorithme qui demande l'âge d'un enfant à l'uilisateur. ensuite il l'informe de sa categorie : 
    - "poussin" de 6 à 7 ans 
    - "pupille" de 8 à 9 ans 
    - "minime" de 10 à 11 ans 
    - "cadet" apres 12 ans 
Peut-on concevoir plusieurs algrithme equivalant menant à ce résultat ?

*/
echo "Debut";
echo "\n";

//demande l'age à l'utilisateur 
$age = readline( " entrez l'age : ");

//test l'age et affiche sa categorie
if ( $age == 6 or $age == 7){
    echo " votre enfant est 'Poussin'";
}else

    if( $age == 8 or $age == 9){
        echo " votre enfant est 'Pupille'";
    }   else{
            
            if( $age == 10 or $age == 11){
                echo " votre enfant est 'Minime'";
            }   else{
                    
                    if ( ($age == 12 or $age > 12) and $age <= 18)
                        echo " votre enfant est 'Cadet'";
                        else{
                            
            }
        }
}


echo "\n";
echo "fin";

?>