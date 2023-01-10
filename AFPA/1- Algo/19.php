<?php 
    /*
    Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants.
    Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.

    Var nb,i : entier
    
    debut
        Ecrire("Veuillez entrer un nombre");
        Lire nb;
        
        Pour i allant de nb+1 à nb + 10 i++
            Debut pour
                Ecrire(i);
            fin pour
    fin
    */

    // Demande à l'utilisateur de saisir un nombre
    $nb = readline('Veuillez entrer un nombre: ');

    // Affiche les 10 prochain nombre du nombre saisie.
    for ($i = $nb + 1; $i <= $nb + 10 ; $i++) 
    { 
        echo $i;
        echo PHP_EOL;
        
    }
?>