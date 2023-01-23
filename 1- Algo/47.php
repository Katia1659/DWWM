<?php 
    /*
    Donner un algorithme pour supprimer un élément donné d'un tableau d'entiers 
    
    Var tab : liste;

    var i,nbtab,nbi,n : entier;

    debut
        Ecrire('Longueur du tableau ?');
        Lire nbtab;
        n <- 0;

            pour i allant de 0 à nbtab i++
            Ecrire('Saisir la valeur : ');
            Lire tab[i];
        finpour

        Pour i allant de 0 à nbtab i++
            Ecrire(i,')');
            Ecrire(tab[i],'.');
        finpour

        Ecrire('Vous voulez supprimer quelle valeur ? saisissez son index dans le tableau :');
        Lire nbi;

        Pour i allant de nbi à nbi i++
            tab[i] <- '';
        finpour

        pour i allant de 0 à nbtab i++
            si tab[i] != '' alors
                tab[i] <- tab[i]
                n <- n+1
            finsi
        finpour

        pour i allant de 0 à n i++
            Ecrire(i.')');
            Ecrire(tab[i].' ');
        finpour
    fin
    */


    // Initialisation du tableau et demande de la longueur du tableau.
    $tab = array();

    $nbTab = readline('Longueur du tableau :');

    // Première boucle qui demande de saisir les valeur dans le tableau.
    for ($i=0; $i < $nbTab ; $i++) { 
        $tab[$i] = readline("Saisir la valeur n° $i");
    }


    echo 'Tableau initial'.PHP_EOL;
    // Affichage du tableau initial avec l'index pour que l'utilisateur voit quelle index supprimer.
    for ($i=0; $i < $nbTab ; $i++) { 
        echo $i.')'.$tab[$i].'||';
    }


    echo PHP_EOL;
    // Demande a l'utilisateur quelle index supprimer.
    $nbi = readline("Veuillez saisir l'index de la valeur que vous voulez supprimer ?");
    
    // On declare l'index saisie et on met en valeur null.
    $tab[$nbi] = null;
    
    // Deuxième boucle qui va mettre les valeurs de index+1 à l'index.
    for ($i=$nbi; $i < sizeof($tab)-1 ; $i++) { 
        $tab[$i] = $tab[$i+1];
        
    }

    // Permet de supprimer le dernier index.
    unset($tab[sizeof($tab)-1]);


    echo 'Nouveau tableau'.PHP_EOL;
    // Affichage du tableau sans la valeur supprimée.
    for ($i=0; $i < sizeof($tab) ; $i++) 
    { 
            echo "$i) $tab[$i] ||";
    }
?>