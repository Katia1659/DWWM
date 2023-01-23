<?php 
    /*
    Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, 
    et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres.

    Var nb,i,pg : entier
    
    debut
        
        pg <- 0
        Pour i allant de 1 à 20  i++ 
            Debut pour
                Ecrire("Veuillez entrer le nombre n°");
                Ecrire(i);
                Lire nb;
                Si nb > pg alors 
                    debut si 
                        pg <- nb;
                    fin si                    
            fin pour
        Ecrire("Le plus grand nombre est ");
        Ecrire(pg);
    fin
    */

    // Initialise la variable pgnb
    $pgnb = 0;

    // Boucle qui demande à l'utilisateur de saisir 20 nombre puis affiche le plus nombre.
    for ($i=1; $i <= 20 ; $i++) 
    { 
        $nb = readline("Veuillez entrer le nombre n° $i : ");
        if ($nb > $pg) {
            $pgnb = $nb;
        }
    }
    echo 'Le plus grand nombre est ',$pgnb;

?>