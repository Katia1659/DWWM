<?php 
    /*
    Ecrire un algorithme qui permet d'inverser un tableau.


    Var tab : liste;

    Var i,n,temp : entier;

    Debut
        tab <- [14,3,9,2,5];
        n <- taille(tab);

        pour i allant de 0 à (n-1)/2 i++
            temp <- tab[i];
            tab[i] <- tab[n-1-i];
            tab[n-1-i] <- temp;
        finpour
    fin
    */

    // Initialisation du tableau
    $tab = array();

    // Initialisation de la variable nbtab qui sera la taille du tableau
    $nbTab = readline('Saisir la longueur du tableau : ');

    for ($i=0; $i < $nbTab ; $i++) { 
        $tab[$i] = readline('Saisir la valeur n°'.$i.' ');

    }

    // on affiche le tableau initial.
    for ($i=0; $i < $nbTab ; $i++) { 
        echo $tab[$i].' ';
         
    }
    echo PHP_EOL;

    // Initialisation de la boucle qui permettra d'inverser les valeur du tableau donc le dernier element sera le premier et ainsi de suite.
    // pour cela on divise par 2 la taille du tableau qui sera le compteur max de i. 
    for ($i=0; $i < sizeof($tab)/2 ; $i++) { 
        // On echange de place le premier element avec le dernier et ainsi de suite. 
        $temp = $tab[$i];
        $tab[$i] = $tab[sizeof($tab)-1-$i];
        $tab[sizeof($tab)-1-$i] = $temp;
    }

    // Affichage du tableau inversé.
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        echo $tab[$i].' ';
         
    }


?>