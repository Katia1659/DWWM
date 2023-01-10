<?php 
    /*
    Ecrivez un algorithme permettant,toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeur.
    Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. 
    On prendra soin d'effectuer la saisie dans un premier temps et la recherche de la plus grande valeur dans un second temps.
    
    var tab : liste;
    var i,nbval,pg,pos : entier;

    debut
        pg = 0;
        pos = 0;
        Ecrire('Combien voulez vous saisir de valeurs ?');
        Lire nbval;

        Pour i allant de 0 à nb i++
            Ecrire('Saisir la valeur n°');
            Ecrire(i);
            Lire(tab[i]);
        fin pour

        pour i allant de 0 à nb i++ 
            si tab[i] > pg alors
                pg <- tab[i];
                pos <- i;
            finsinon
        finpour

        Ecrire("Le plus grand nombre est ")
        Ecrire(pg)
        Ecrire(En position )
        Ecrire(pos)
    fin
    */
        // Initalisation du tableau

        $tab = array();

        // Initialise le plus grand nombre du tableau et sa position
        $pgtab = 0;
        $pos;

        // On demande à l'utilisateur de saisir combien de valeur veut il entrer
        $nb = readline('Saisir la grandeur du tableau :');


        // Initialisation de la boucle qui va demander les valeurs a entrer dans le tableau
        for ($i=0; $i < $nb ; $i++) { 
            $tab[$i] = readline('Saisir la valeur n°'.$i.' ');
    
        }

        // Initialisation de la boucle qui va determiné quelle est le plus grand nombre du tableau et en quelle position
        for ($i=0; $i < sizeof($tab) ; $i++) { 
            if ($tab[$i] > $pgtab) {
                $pgtab = $tab[$i];
                $pos = $i;
            }
        }

        echo "Le nombre le plus grand du tableau est : $pgtab en posisition $pos";

?>