<?php 
    /*
    Donnez le résultat de la multiplication de deux nombres en ne faisant que des additions.

    Var nb1,nb2,i,res : Entier;
    debut
        res <- 0
        Ecrire("Saisir le premier nombre");
        Lire nb1;
        Ecrire("Saisir le deuxieme nombre");
        Lire nb2;
        Pour i allant de 1 à nb2 i++
            debut pour
                res <- res + nb1;
            fin pour
        Ecrire("Le resultat est ")
        Ecrire(res)
    fin
    */

    // Demande a l'utilisateur de saisir 2 nombres.
    $nb1 = readline('Saisir le premier nombre: ');
    $nb2 = readline('Saisir le deuxieme nombre: ');

    $som = 0;

    // Boucle pour qui permet de faire une multiplication en ne faisant que des additions et affiche le résultat
    for ($i=1; $i <= $nb2 ; $i++) { 
        $som +=  $nb1;
    }
    echo $nb1.'x'.$nb2.'='.$som;

?>