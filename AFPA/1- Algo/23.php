<?php 
    /*
    Reecrire l'algorithme précédent, mais cette fois ci on ne connait pas d'avance combien l'utilisateur souhaite saisir de nombres.
    La saisie des nombres s'arrete lorque l'utilisateur entre un zéro.

    Var nb,i,pg,pos : entier
    
    debut
        i <- 1
        pg <- 0
        nb <- 1

        Tant que nb <> 0 alors 
            Debut tant que
                i <- i + 1
                Ecrire("Veuillez entrer le nombre n°");
                Ecrire(i);
                Lire nb;
                Si nb > pg alors 
                    debut si 
                        pg <- nb ;
                        pos <- i;
                    fin si                    
            fin pour
        Ecrire("Le plus grand nombre est ");
        Ecrire(pg);
        Ecrire("en position n°");
        Ecrire(pos)
    fin
    */

    // Initialisation des variables.
    $i = 1;
    $pg = 0;
    $nb = 1;

    // Boucle qui demande à l'utilisateur de saisir x nombres jusqu'a ce qu'il tape 0 puis affiche le nombre le plus grand et sa position.
    while ($nb != 0) 
    { 
        
        $nb = readline("Veuillez entrer le nombre n° $i  ou mettre 0 pour stopper la saisie: ");

        if ($nb > $pg) {
            $pg = $nb;
            $pos = $i;
        }
        
        $i++;
    }
    echo 'Le plus grand nombre est ',$pg,' en position n°',$pos;

?>