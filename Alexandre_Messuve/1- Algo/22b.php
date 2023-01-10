<?php 
    /*
    Modifiez ensuite l'algorithme pour que le programme affiche de surcroit en quelle position avait été saisie ce nombre.

    Var nb,i,pg,pos : entier
    
    debut
        
        pg <- 0
        Pour i allant de 1 à 20  i++ 
            Debut pour
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

    // Initialise la variable pgnb
    $pgnb = 0;

    // Boucle qui demande à l'utilisateur de saisir 20 nombres puis affiche le nombre le plus grand et sa position.
    for ($i=1; $i <= 20 ; $i++) 
    { 
        $nb = readline("Veuillez entrer le nombre n° $i : ");
        if ($nb > $pg) {
            $pgnb = $nb;
            $pos = $i;
        }
    }
    echo 'Le plus grand nombre est ',$pg,' en position n°',$pos;

?>