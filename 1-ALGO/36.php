<?php 
    /*
    Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux.
    Pour calculer le schtroumpf, il faut multiplier chaque élément du tableau 1 par cheaque élément du tableau 2 et additionner le tout.

    Var tab1 ,tab2 : liste;
    Var i,som,j : entier;
    Debut
        tab1[2,5,8,4];
        tab2[6,7];
        
        pour i allant de 0 à taille(tab1) i++
            debutpour
                pour j allant de 0 à taille(tab2) j++
                    debutpour
                        som <- som + tab1[i] * tab2[j]
                    finpour
            finpour
        Ecrire('La somme est ')
        Ecrire(som)
    fin
    */

    // Initialisation des tableaux 
    $tab1 = array(2,5,8,4);
    $tab2 = array(6,7);

    $som = 0;
    // Initialisation de la boucle qui va calculer la somme du schtroumf.
    for ($i=0; $i < sizeof($tab1) ; $i++) 
    {
        for ($j=0; $j < sizeof($tab2) ; $j++) 
        { 
             $som += $tab1[$i] * $tab2[$j];
        } 

    }
    // Affichage du résultats
    echo 'La somme du schtroumf est de : '.$som;

?>