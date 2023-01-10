<?php 
    /*
    Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur :
    1
    12
    123
    1234
    12345
    123456
    
    Var nb,i,j Entier;

    debut
        Ecrire("Veuillez entrer le nombre de lignes");
        Lire nb;

        Pour i allant de 1 à nb i++
            debut pour
                pour j allant de 1 à i j++
                    debutpour
                        ecrire(j);
                    finpour
                ecrire("\n");
            fin pour
    fin
                
    */

    // Demande à l'utilisateur de saisir le nombre de ligne
    $nb = readline('Veuillez saisir le nombre de ligne :');

    // Boucle qui permet d'afficher un escalier de chiffre partant de 1 à nb.
    for ($i=1; $i <= $nb ; $i++) 
    { 
        
        for ($j=1; $j <= $i ; $j++) 
        { 
            echo $j;
        }

        echo PHP_EOL;
    }
?>