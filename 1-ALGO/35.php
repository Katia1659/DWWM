<?php 
    /*
    Ecrivez un algorithme constituant un tableau à partir de deux tableaux de meme longueur
    préalablement saisis.Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

    Var tab1 ,tab2 , tab3: liste;
    Var i : entier;
    Debut
        tab1[4,8,7,9,1,5,4,6];
        tab2[7,6,5,2,1,3,7,4];
        
        pour i allant de 0 à 8 i++
            debutpour
                tab3[i] <- tab1[i] + tab2[i];
            finpour
        pour i allant de 0 à 8 i++;
            debutpour
                Ecrire(tab3[i])
                Ecrire('\n')
            fin pour
    fin
    */

    // Initialisation des tableaux
    $tab1 = array(4,8,7,9,1,5,4,6);
    $tab2 = array(7,6,5,2,1,3,7,4);
    $tab3 = array();

    // Initialisation de la boucle qui va calculer la somme des element du tableau 1 et 2.
    for ($i=0; $i < sizeof($tab1) ; $i++) { 
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }

    // Affichage du tableau 3 
    for ($i=0; $i < sizeof($tab3) ; $i++) { 
        echo $i.'-'.$tab3[$i];
        echo PHP_EOL;
    }


?>