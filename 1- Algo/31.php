<?php 
    /*
    Ecrire un algorithme qui déclare et remplisse un tableau contenant les six voyelles de l'alphabet latin.
    
    Var Tab : Liste;
    Var i : Entier;

    Debut
        Tab[0] <- "A"; 
        Tab[1] <- "E"; 
        Tab[2] <- "I"; 
        Tab[3] <- "O"; 
        Tab[4] <- "U"; 
        Tab[5] <- "Y"; 

        Pour i allant de 0 à 5 i++
            debut pour
                Ecrire(Tab[i])
            fin pour
    fin

    */

    // Initalisation du tableau

    $tab = array('A','E','I','O','U','Y');
    
    // Boucle qui affiche le tableau
    for ($i=0; $i <= 5; $i++) { 
        echo $tab[$i].' ';
    }
?>