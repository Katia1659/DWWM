<?php 
include_once("../modele/Abstract.class.php");
include_once("../modele/Developpeur.class.php");
include_once("../modele/Manager.class.php");

$nbr = readline("combien voulez vous d'utilisateurs ? ");

//boucle permettant de créer les utilisateurs qui choisissent dev ou managers avec leurs services ou leurs spé 
for ($i=1; $i <= $nbr ; $i++) { 
    $nom = readline("entrer le nom : ");
    $prenom = readline("entrer le prenom : ");
    $mail = readline("entrer le mail : ");
    $tel = readline("entrer le numero de telephone : ");
    $salaire = readline("entrer salaire : ");
    $j = readline("Quel profil ? 1 pour Manager, 2 pour Developpeur : ");
    if ($j == 1) {
        $_service = readline("entrer votre service : ");
        $utilisateur[$i] = new Manager($nom,$prenom,$mail,$tel,$salaire,$_service); 
    }elseif ($j == 2) {
        $_specialite = readline("entrer votre specialite : ");
        $utilisateur[$i] = new Developpeur($nom,$prenom,$mail,$tel,$salaire,$_specialite); 
    }
    echo "\n";
}


// affiche la liste des dev et des manageurs
echo "\n";
echo "liste : "."\n";
echo "\n";
for ($i=1; $i <= $nbr ; $i++) { 
    echo $utilisateur[$i]->afficher();
    echo "\n";
}

//Créer un objet de type personne. qu"est-ce que vous remarquez ? 

// $personne = new Personne;

//cela met une erreur, il est impossible de creer un objet Personne puisque cette class est abstraite. 
