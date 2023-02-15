<?php

include_once '../modele/Personne.class.php';
include_once '../modele/Utilisateur.class.php';
include_once '../modele/Profil.class.php';






    echo "****************************************************"."\n";
    
//Création  de profil

    $user = readline("Nombre de profil : ");

    
    

    for ($i=1; $i <= $user ; $i++) { 

    echo "Profil ".Profil::$compteur."\n";

    echo "Votre profil : "."\n";
    
    echo "---------------"."\n";
    
    $code = readline("Votre code : ");
    $libelle = readline("Votre libelle : ");
    echo PHP_EOL;

    $profils[$i]=new Profil($code,$libelle);

    }

//Creation d'utilisateur

    $user = readline("Nombre d'utilisateurs : ");

    for ($i=1; $i <= $user; $i++) {

        echo "Utilisateur ".Utilisateur::$compteur."\n";

    echo "-----------------------"."\n";

    echo "Vos infos : "."\n";

    $nom = readline("Votre nom : ");
    $prenom = readline("Votre prenom : ");
    $mail = readline("Votre mail : ");
    $telephone = readline("Votre telephone : ");
    $salaire = readline("Salaire : ");
    echo PHP_EOL;
    
    $login = readline("Votre login : ");
    $password = readline("Votre mot de passe : ");
    $service = readline("Votre service : ");
    $code= readline(" donner le code de poste ");
    echo PHP_EOL;

//Recupère le code du profil
    foreach ($profils as $key => $value) {
       if ($code == $value->getCode())
       {
        $profil = $value;
       }
    }
    $newUtilisateur[$i] = new Utilisateur($login,$password,$service,$profil,$nom, $prenom,$mail,$telephone,$salaire);

    } 
    
echo "****************************************************"."\n";


foreach ($newUtilisateur as $key => $value) {

    //Calcul du salaire
    $value->calculerSalaire();

    //Affichage profil/utilisateur
    $value->affiche();

echo "La liste des managers :";

    //Affichage si manager
    $value->afficheManager();

}


