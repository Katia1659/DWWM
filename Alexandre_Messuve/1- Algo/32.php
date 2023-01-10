<?php 
    /*
    Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite sasir les valeurs par l'utilisateur.

    Var tab : Liste;
    Var i : Entier;

    debut
        pour i allant de 0 a 9 i++
            debutpour
                Ecrire(la note de n°)
                Ecrire(i)
                Lire tab[i]
            fin pour

        pour i allant de 0 à 9 i++
            debutpour
                Ecrire(tab[i])
            finpour
    
    */

    // Initialisation du tableau
    $tab = array();

    // Initialisation de la boucle
    for ($i=0; $i < 9 ; $i++) { 
        $tab[$i] = readline('Entre la note n°'.$i.' ');
    }
    for ($i=0; $i < sizeof($tab); $i++) { 
        echo 'Note n°'.$i.' = '.$tab[$i];
        echo PHP_EOL;

    }

?>