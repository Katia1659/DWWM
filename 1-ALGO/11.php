<?php 
    /*
    Ecrire un programme qui demande un nombre a l'utilisateur, puis qui calcule et affiche le carré de ce nombre.

    Var nb,carre : entier
    Début
        Ecrire <- "Veuillez ecrire un nombre";
        LIRE nb;
        carre <- nb*nb;
        ecrire(carre);
    fin
    */
    
    // Demande à l'utilisateur de saisir un nombre
    $nb = readline('Entre un nombre : ');

    // Initialisation de la variable carre qui prend la valeur de nb au carre.
    $carre = $nb * $nb;


    // Affichage du résultat
    echo 'La carré de ';
    echo $nb;
    echo ' est : ';
    echo $carre;
?>