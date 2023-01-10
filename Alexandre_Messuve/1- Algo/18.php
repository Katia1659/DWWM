<?php 
    /*
    Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
    Ensuite, il l'informe de sa catégorie:
            "Poussin" de 6 à 7 ans
            "Pupille" de 8 à 9 ans
            "Minime" de 10 à 11 ans
            "Cadet" après 12 ans
    Peut-on concevoir plusieurs algorithmes équivalents menant a ce résultat ? 
    
    1 er résultat

    Var age : Entier

    Debut
        Ecrire("Veuillez entrer l'age de votre enfant :");
        Lire age;

        Si age >= 6 ET age <= 7 alors
            debut si
                Ecrire ("Votre enfant est dans la catégorie Poussin.");
            fin si
        Sinon si age >= 8 ET age <= 9 alors
            debut sinon
                Ecrire ("Votre enfant est dans la catégorie Pupille");
            fin sinon
        Sinon si age >= 10 ET age <= 11 alors
            debut sinon 
                Ecrire ("Votre enfant est dans la catégorie Minime");
            fin sinon
        Sinon si age >= 12 alors
            debut sinon 
                Ecrire ("Votre enfant est dans la catégorie Cadet");
            fin sinon
        Sinon
            debutsinon
                Ecrire("Erreur");
            finsinon

    Fin

    2ème résultat

    Var age : Entier

    Debut
    Ecrire("Veuillez entrer l'age de votre enfant :");
    Lire age;

    Selon (vrai)
        debutselon
            Cas age >= 6 ET age <= 7 alors
                Ecrire ("Votre enfant est dans la catégorie Poussin.");
                break;
            
            Cas age >= 8 ET age <= 9 alors
                Ecrire ("Votre enfant est dans la catégorie Pupille");
                break;

            Cas age >= 10 ET age <= 11 alors
                Ecrire ("Votre enfant est dans la catégorie Minime");
                break;

            Cas age >= 12 alors
                Ecrire ("Votre enfant est dans la catégorie Cadet");
                break;
            
            Default
                Ecrire("Erreur");
                break;
        finselon
    Fin
    */
    // Demande à l'utilisateur de saisir l'age de son enfant
    $age = readline("Entrez l'age de votre enfant :");

    // Lui affiche dans quelle catégorie est sont enfant suivant son age.
    if ($age >= 6 && $age <= 7) 
    {
        echo 'Votre enfant est dans la catégorie Poussin';
    }

    elseif ($age >= 8 && $age <= 9) 
    {
        echo 'Votre enfant est dans la catégorie Pupille';
    }

    elseif ($age >= 10 && $age <= 11) 
    {
        echo 'Votre enfant est dans la catégorie Minime';
    }

    elseif ($age >= 12) 
    {
        echo 'Votre enfant est dans la catégorie Cadet';
    }
    else
    {
        echo 'Erreur';
    }

    // switch (true) 
    // {

    //     case $age >= 6 && $age <= 7:
    //         echo 'Votre enfant est dans la catégorie Poussin';
    //         break;

    //     case $age >= 8 && $age <= 9:
    //         echo 'Votre enfant est dans la catégorie Pupille';
    //         break;

    //     case $age >= 10 && $age <= 11:
    //         echo 'Votre enfant est dans la catégorie Minime';
    //         break;

    //     case $age >= 12:
    //         echo 'Votre enfant est dans la catégorie Cadet';
    //         break;

    //     default:
    //         echo 'Erreur';
    //         break;
    // }
    // Oui il y a plusieur algorithme qui donne le même résultat
?>