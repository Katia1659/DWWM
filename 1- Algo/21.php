<?php 
    /*
    Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.

    Var nb,i,res : entier
    
    debut
        Ecrire("Veuillez entrer un nombre");
        Lire nb;
        res <- 1
        Pour i allant de 1 à nb  i++
            Debut pour
                res <- res * i;                        
            fin pour
        Ecrire("La factorielle de")
        Ecrire(nb)
        Ecrire('! =')
        Ecrire(res)
    fin
    */

    // Demande à l'utilisateur de saisir un nombre.
    $nb = readline('Veuillez entrer un nombre: ');
    $res = 1;

    // Affiche le calcule de 1 au nombre saisie , puis affiche le produit de ce calcule.
    for ($i=1; $i <= $nb ; $i++) 
    { 
        $res = $res * $i;
    }
    echo 'La factorielle de '.$nb.'! = ' .$res;

?>