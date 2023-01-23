<?php 
    /*
    Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.

    Tableau initial D E C A L A G E

    Var tab : liste;
    tmp : caractère
    Var i,n : Entier;

    
    Debut
        T <- ["D","E","C","A","L","A","G","E"];
        tmp <- T[0];

        n <- taille(tab);
        
        pour i allant 0 à n-1  i++
            T[i] <- T[i+1];
        fin pour

        tab[n-1] <- tmp;

        pour i allant de 0 à n i++
            Ecrire(tab[i]);
        finpour

    fin


    */

    // Initialisation du tableaux
    $tab = array('D','E','C','A','L','A','G','E');

    // Declariation des variables
    // Variables tmp qui prend l'index 0 du tableau
    $tmp = $tab[0];

    // Initialisation de la boucle qui va décalé les valeur du tableau sur la gauche
    for ($i=1; $i < sizeof($tab); $i++) { 
        $tab[$i-1] = $tab[$i];
        if ($i == sizeof($tab)-1) {
            $tab[$i] = $tmp;
        }
    }


    // Affichage du tableau
    for ($i=0; $i < sizeof($tab); $i++) { 
        echo $tab[$i].' ';
    }

?>