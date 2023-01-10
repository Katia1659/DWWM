<?php 
    /*
    Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre.
    Par exemple, si l'on entre 5, le programme doit calculer: 1+2+3+4+5=15

    Var nb,i,res : entier
    
    debut
        Ecrire("Veuillez entrer un nombre");
        Lire nb;
        
        Pour i allant de 1 à nb 
            Debut pour
                res <- res + i;
                Si i <> nb alors
                    debut si
                        Ecrire(i);
                        Ecrire("+");
                    fin si
                sinon
                    debutsinon
                        ecrire(i);
                    finsinon
            fin pour
        Ecrire("=")
        Ecrire(res)
    fin
    */

    // Demande à l'utilisateur de saisir un nombre.
    $nb = readline('Veuillez entrer un nombre: ');

    $res = 0;


    // Affiche le calcule de 1 au nombre saisie , puis affiche la somme de ce calcule.
    for ($i=1; $i <= $nb ; $i++) 
    { 
        echo $i;
        if ($i != $nb) 
        {
            echo '+';
        }
        $res = $res + $i;
    }
    echo '='.$res;
?>