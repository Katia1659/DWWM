<?php 
    /*
    Ecrire un algorithme qui calcule le nombre d'entiers pairs et le nombre d'entiers impairs d'un tableau d'entiers.

    Var tab : Liste;
    var i,nbimp,nbpair : entier;

    Debut 
        tab <- [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

        nbimp = 0;
        nbpair = 0;

        Pour i allant de 0 à taille(tab)-1 i++
            si tab[i] %2 = 0 alors 
                nbpair <- nbpair + 1;
            fin si
            sinon
                nbimp <- nbimp + 1;
            finsinon
        finpour

        Ecrire("Il y a ",nbimp, "Impair dans le tableau");
        Ecrire("Il y a ",nbpair, "Pair dans le tableau");
    fin
    
    */

    // Initialisation du tableau
    $tab = array(45,84,51,65,75,151,514,85,45,15,42,1,51,);

    // Initialisation des variables
    $nbpair = 0;
    $nbimp = 0;

    // Initialisation de la boucle for qui va calculé le nombre impair et pair en faisant tab[i] modulo% 2 == 0. 
    for ($i=0; $i < sizeof($tab); $i++) { 
        if ($tab[$i] %2 == 0) {
            $nbpair++;
        }
        else {
            $nbimp++;
        }
    }

    echo 'Il y a '.$nbpair. ' nombre pair dans le tableau'.PHP_EOL;
    echo 'Il y a '.$nbimp. ' nombre imppair dans le tableau';


?>
