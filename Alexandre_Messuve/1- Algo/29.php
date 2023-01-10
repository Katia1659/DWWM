<?php 
    /*
    Ecrire un algorithme qui demande un nombre, calcule et affiche la somme de i=1 à n = i³.

    Var nb,som,i : entier;
    debut
        Ecrire('Veuillez saisir un nombre : ');
        Lire nb;

        Pour i allant de 1 à nb i++
            debutpour
                som <- som + i x i x i;
            finpour
        Ecrire('La somme est' );
        Ecrire(som);
    fin
    */

    // Demande a l'utilisateur de saisir un nombre.
    $nb = readline('Veuillez saisir un nombre : ');
    // Initialise som à 0.
    $som = 0;

    // Boucle  de i à nb qui permet de calculer la variable som + i³.
    for ($i=1; $i <= $nb ; $i++) 
    { 
        $som += $i * $i * $i;
    }
    // Affiche la somme du calcul si dessus.
    echo 'La somme est '.$som;

?>