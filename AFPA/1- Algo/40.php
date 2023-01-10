<?php 
    /*
    Soit un tableau T à deux dimensions (12,8) préalablement rempli de valeurs numériques.
    Ecrire un algorithme qui recherche la plus grande aleur au sein de ce tableau.

    Var T : Liste;
    Var i,j,pgt : Entier;

    Debut
        T[0] <- [42,54,80,45,64,70,51];
        T[1] <- [50,80,45,70,120,894,1210];
        pgt <- 0;

        Pour i allant de 0 à taille(T) i++
            Pour j allant de 0 à taille(T[0]) j++
                Si T[i][j] > pgt alors
                    pgt <- T[i][j];
                finsi
            finpour
        finpour

        Ecrire "le nombre le plus grand est" ,pgt;

    Fin
    
    */

    // Initialisation du tableau à deux dimension
    $t = array(
        array(42,54,80,45,64,70,51,5465),
        array(50,80,45,70,120,894,1210,8456),
        array(50,53,45,70,120,894,6584,541),
        array(50,80,45,70,120,894,545,151),
        array(50,80,45,70,120,894,8451,745),
        array(50,80,45,70,120,894,484,415),
        array(50,80,45,70,120,894,8451,515),
        array(50,80,45,70,120,894,21548,51),
        array(50,80,45,70,120,894,84515,51),
        array(50,80,45,70,120,894,84515,51),
        array(50,80,45,70,120,894,84515,62),
        array(50,80,45,70,120,894,84515,95)
    );

    // Initialisation des variables
    $pgT = 0;

    // Initialisation de la boucle qui va determiné le nombre le plus grands dans le tableau a 2 dimensions
    for ($i=0; $i < sizeof($t) ; $i++) { 
        for ($j=0; $j < sizeof($t[$i]) ; $j++) { 
            if ($t[$i][$j] > $pgT) {
                $pgT = $t[$i][$j];
            }

        }
    }
    // Affiche le plus grand nombre du tableau à 2 dimensions.
    echo "Le nombre le plus grands est : $pgT".PHP_EOL;

    // print_r($t)
?>