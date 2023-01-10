<?php 
    /*
    Ecrire un algorithme saisissant 2 variables entières qui calcule et affiche leur moyenne.

    Var nbun,nbdeux,moy,som : Entier;

    debut
        Ecrire("Veuillez entrer le premier nombre");
        Lire nbun;
        Ecrire("Veuillez entrer le deuxieme nombre");
        Lire nbdeux;
        som <- nbun + nbdeux;
        moy <- som / 2;

        Ecrire("La moyenne est ");
        Ecrire(moy);
    fin
    */

    // Demande à l'utilisateur de saisir 2 nombre.
    $nb1 = readline('Veuillez entrer le premier nombre : ');
    $nb2 = readline('Veuillez entrer le deuxieme nombre : ');

    // Calcule la somme de nb1 + nb2.
    $som = $nb1 + $nb2;

    // Calcule la moyenne et affiche la moyenne.
    $moy = $som / 2;

    echo 'La moyenne est ',$moy;
?>