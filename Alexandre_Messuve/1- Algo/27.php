<?php 
    /*
    Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce modume est sanctionné par une note d'oral
    de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit etre supèrieure ou égale à 10 pour valider le module.

    Var noteO,noteE,moy : Entier

    Debut
        Ecrire("Veuillez mettre la note de l'oral :");
        Lire noteO;
        Ecrire("Veuillez entrer la note de l'écrit : ")
        Lire noteE;
        noteO <- noteO x 1;
        noteE <- noteE x 2;
        moy <- (noteO + noteE) / 3

        Si moy >= 10 alors
            debut si 
                Ecrire("Vous avez validé le module");
            fin si
        sinon
            debutsinon
                Ecrire("Vous n'avez pas validé le module");
            finsinon
    
    fin
        
    */
    // Demande de saisir les notes
    $noteO = readline("Veuillez la note de l'oral :");
    $noteE = readline("Veuillez entrer la note de l'écrit :");
    // Calcule le coef
    $noteO *=  1;
    $noteE *=  2;
    // Calcule la moyenne
    $moy = ($noteE + $noteO) / 3;
    // Variable condition
    $c1 = $moy >= 10;
    // Si la moyennes est supérieur ou égal a 10 alors il execute le code suivant:
    if ($c1) 
    {
        echo 'Vous avez validé le module';
    }
    // Si la condition du dessus est fausse alors il affiche le texte suivant:
    else
    {
        echo "Vous n'avez pas validé le module";
    }
?>
