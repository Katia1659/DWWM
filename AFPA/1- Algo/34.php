<?php 
    /*
    Ecrivez un algorithme calculant la somme des valeurs d'un tableau( on suppose que le tableau a été préalablement saisie.)
    
    Var tab : Liste;
    Var i,som : Entier;

    Debut
        som <- 0

        tab[0] <- 25
        tab[1] <- 50
        tab[2] <- 120
        tab[3] <- 60
        tab[4] <- 15
        tab[5] <- 5

        pour i allant de 0 à 5 i++
            debut pour
                som <- som + tab[i]
            fin pour
        
        Ecrire('La somme du tableau est ')
        Ecrire(som)
    fin
    */

    // Initialisation du tableau
    $tab = array(25,50,120,60,15,5);
    $som = 0;
    // Initialisation de la boucle pour calculer la somme du tableau
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        $som += $tab[$i];
    }
    // Affichage du resultat
    echo 'La somme du tableau est '.$som;


?>