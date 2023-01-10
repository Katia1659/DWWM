<?php
    /*
        Donner un algorithme qui prend en argument un tableau d'entiers de taille n et 
        qui le modifie tels sorts que tous les entiers pairs se retrouvent avant les entiers impairs.
    
        
        Var tab : liste;
        Var i,tmp,nb,j : entier;

        Debut
            Ecrire('Taille du tableau ?');
            Lire nb;
            Pour i allant 0 à nb-1 i++
                Ecrire('Veuillez entrez les valeurs ');
                Lire tab[i];
            finpour

            pour i allant de 0 à taille(tab)-1 i++
                Ecrire tab[i];
            pour i allant de 0 à taille(tab)-1 i++
                pour j allant de i+1 à taille(tab)-1 j++
                    si tab[i] % 2 = 0 ET tab[j] % 2 <> 0 alors
                        tmp <- tab[i];
                        tab[i] <- tab[j];
                        tab[j] <- tmp;
                    finsi
                finpour
            finpour

            pour i allant de 0 à taille(tab)-1 i++
                Ecrire(tab[i]);
            finpour
        fin
    
    */

    // Initialisation du tableau
    $tab = array();

    // Demande a l'utilisateur de saisir la taille du tableau.
    $nbT = readline('Veuillez entrer la taille du tableau : ');

    for ($i=0; $i < $nbT ; $i++) { 
        $tab[$i] = random_int(0,30);
    }

    // Premier affichage pour comparé les valeurs avec les valeurs finale du dernier affichage.
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        echo "$tab[$i] | ";
    }
    echo PHP_EOL;

    // Initialise la boucle i 
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        // Initialisation de la j
        for ($j=$i+1; $j < sizeof($tab) ; $j++) { 
            // Un si qui va comparé si tab de i est pair et que tab de j est impair alors il va interverser les de tab de i et tab de j.
            if ($tab[$i] %2 == 1 && $tab[$j] %2 != 1) {
                $tmp = $tab[$j];
                $tab[$j] = $tab[$i];
                $tab[$i] = $tmp;
            }
        }
    }

    // Affichage du résultat
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        echo "$tab[$i] | ";
    }
?>