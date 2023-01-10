<?php 
    /*
    Soit T un tableau de N réels. Ecrire un algorithme qui permet de calculer le nombre des occurrences d'un nombre X
    (c'est à dire combien de fois ce nombre X figure dans le tableau T)


    Var tab : liste;
    Var i,x,nbx : entier;

    Debut
        tab <- [42,54,1,2,2,3,5,4,4,4,4,5,7,8,9,10];
        Ecrire("Quelle nombre voulez vous chercher dans le tableau ? ");
        lire x;
        nbx <- 0;
        Pour i allant de 0 à taille(tab)-1 i++
            si tab[i] = x alors
                nbx <- nbx +1;
            finsi
        finpour

        Ecrire(x," apparait ",nbx,' fois dans le tableau');
    fin
    */

    // Initialisation du tableau.

    $tab = array(42,54,1,2,2,3,5,4,4,4,4,5,7,8,9,10);

   


    // Initialisation de la variable x qui Demande à l'utilisateur de saisir le nombre qu'il veut rechercher.
    $x = readline('Quelle nombre voulez vous rechercher dans le tableau : ');

    // Initialisation de nbx qui sera le compteur du nombre x.
    $nbx = 0;

    // Initialisation de la boucles quand tab de i sera égal à x alors nbx prendra sa valeur +1.
    for ($i=0; $i < sizeof($tab); $i++) { 
        if ($tab[$i] == $x) {
            $nbx++;
        }
    }

    // Affichage du résultat.
    echo $x.' Apparait '.$nbx.' fois dans le tableau';


?>