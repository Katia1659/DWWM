<?php 
    /*
    Ecrire un algorithme triant un tableau par

        -on cherche l'élément de plus petite valeur dans le tableau
        -le placer en tête du tableau
        -recommencer avec le tableau moins la première case

    Var tab : liste;
    var i,j,min,n,tmp : entier;

    Debut
        tab <- [14,3,9,2,5];
        n <- taille(tab);

        Pour  i allant de 0 à n-2 i++
            min <- i;
            pour j allant de i+1 à n-1 j++
                si tab[j] < tab[min] alors
                    min <- j;
                fin si
            finpour
            si min <> i alors
                tmp <- tab[min];
                tab[min] <- tab[i];
                tab[i] <- tmp;
            finsi
        finpour

        pour i allant de 0 à n-1 i++
            Ecrire(tab[i])
        finpour
    fin
    */


    // Initialisation du tableau
    $tab = array(14,3,9,2,5);


    // Initialisation de la boucle qui va trié le tableau.
    for ($i=0; $i < sizeof($tab); $i++) { 
        $min = $i;
        for ($j=$i+1; $j < sizeof($tab); $j++) { 
            if ($tab[$j] < $tab[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $tab[$min];
            $tab[$min] = $tab[$i];
            $tab[$i] = $temp;
        }
    }

    // Affichage du tableau trié
    for ($i=0; $i < sizeof($tab); $i++) { 
        echo $tab[$i].' ';
    }
?>