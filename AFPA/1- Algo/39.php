<?php 
    /*
    Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe.
    Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.

    Var tab : Liste;
    Var i,nbnote,note,moy,noteSup: Entier;

    Debut
        note = 0; 
        Ecrire('Combien voulez vous saisir de valeurs ?');
        Lire nbnote;

        Pour i allant de 0 à nbnote
            Ecrire('Saisir la note n°');
            Ecrire(i);
            Lire(tab[i]);
            note <- note + tab[i]

        fin pour
        
        moy <- note / nbnote

        pour i allant de 0 à nb i++ 
            si tab[i] > moy alors
                notesup <- notesup + 1;
            finsinon
        finpour
    Fin
     */

    // Initalisation du tableau
     $tab = array();

    //  Initalisation des variables
     $note = 0;
     $moy = 0;
     $noteSup = 0;
     

    //  On demande à l'utilisateur le nombre de note qu'il veut saisir
    $nbNote = readline('Combien de note voulez vous saisir ? ');

    // Initialisation de la boucle qui demande de saisir les notes et calculera les notes.
    for ($i=0; $i < $nbNote; $i++) { 
        $tab[$i] = readline("Saisir la note n° $i :");
        $note += $tab[$i];
    }

    $moy = $note / sizeof($tab);

    // Initialisation de la boucle qui calculera le nombre de note au dessus de la moyenne
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        if ( $moy < $tab[$i]) {
            $noteSup++;
        }
    }

    echo "Il y a $noteSup notes supérieur a la moyenne";

?>