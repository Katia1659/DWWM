<?php 
    /*
    Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. 
    Toutes les valeurs doivent etre ensuite augmentées de 1, et le nouveau tableau sera affiché à l'ecran.

    var tab: liste;
    var i,nb : entier;

    debut
        Ecrire('Combien voulez vous saisir de valeurs ?');
        Lire nb;

        Pour i allant de 0 à nb i++
            Ecrire('Saisir la valeur n°');
            Ecrire(i);
            Lire(tab[i]);

            
        fin pour

        pour i allant de 0 à nb i++ 
            tab[i] <- tab[i] + 1;
            Ecrire(tab[i])
        finpour
    fin

    
    */

    // Initalisation des tableau

    $tab = array();

    // On demande à l'utilisateur de saisir combien de valeur veut il afficher 

    $nb = readline('Saisir la grandeur du tableau :');
    // Initialisation de la boucle qui va mettre les valeurs du tableau 1 dans le tableau 2 en ajoutant  + 1 a la valeur du tableau 1

    for ($i=0; $i < $nb ; $i++) { 
        $tab[$i] = readline('Saisir la valeur n°'.$i.' ');

    }



    // Affichage du résultat

    echo 'Tableau :'.PHP_EOL;
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        $tab[$i] = $tab[$i] + 1;
        echo $tab[$i].' ';
    }


?>
