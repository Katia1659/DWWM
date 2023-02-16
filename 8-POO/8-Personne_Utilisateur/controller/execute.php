<?php
    include_once "../modele/Personne.class.php";
    include_once "../modele/Profil.class.php";
    include_once "../modele/Utilisateur.class.php";

    //creation profile
    $chefProjet = new Profil("CP","Chef de Projet");
    $manager = new Profil("MN","Manager");
    $directeurProjet = new Profil("DP","Directeur de Projet");
    $directeurRH = new Profil("DRH","Directeur des Ressources Humaines");
    $directeurG = new Profil("DG","Directeur Général");


    // on met les profils dans un tableau 
    $profils = array($chefProjet,$manager,$directeurProjet,$directeurRH,$directeurG);

    // on demande combien d'utilisateur à créer 
    $nbr = readline("combien voulez vous d'utilisateurs ? ");

    //boucle permettant de créer les utilisateurs et de choisir leurs services / profiles
    for ($i=1; $i <= $nbr ; $i++) { 
        $prenom = readline("entrer le prenom : ");
        $nom = readline("entrer le nom : ");
        $mail = readline("entrer le mail : ");
        $tel = readline("entrer le numero de telephone : ");
        $salaire = readline("entrer salaire : ");
        $login = readline("entrer votre login : ");
        $password = readline("entrez votre mot de pass : ");
        $service = readline("entrer votre service : ");
        $j = readline("Quel profil ? 1 pour chef de Projet, 2 pour Manager, 3 pour le Directeur de Projet, 4 pour directeur des RH et 5 pour directeur général: ");
        if ($j == 1) {
            $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $chefProjet); 
        }elseif ($j == 2) {
            $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $manager); 
        }elseif ($j == 3) {
            $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurProjet); 
        }elseif ($j == 4) {
            $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurRH); 
        }elseif ($j == 5) {
            $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurG); 
        }
    }


    //affiche la liste des utilisateurs et son service

    echo "\n";
    echo "liste des utiisateurs : "."\n";
    echo "\n";
    for ($i=1; $i <= $nbr ; $i++) { 
        $utilisateur[$i]->affiche();
        echo "\n";

    }

    //liste des managers 

    echo "\n";
    echo "la liste des manager : "."\n";
    echo "\n";
    for ($i=1; $i <= $nbr; $i++) { 
        if ($utilisateur[$i]->getProfil()->getCode() == "MN") {
            $utilisateur[$i]->affiche();
        }
    }


    
 ?>