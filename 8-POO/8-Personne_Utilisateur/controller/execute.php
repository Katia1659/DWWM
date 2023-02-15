<?php
include_once "../model/Personne.class.php";
include_once "../model/Utilisateur.class.php";
include_once "../model/Profil.class.php";



//On créer les profils
$chefProjet = new Profil("CP", "Chef de projet");
$manager = new Profil("MN", "Manager");
$directeurProjet = new Profil("DP", "Directeur de projet ");
$directeurRh = new Profil("DRH", "Directeur des ressources humaines");
$directeurGeneral = new Profil("DG", "Directeur général");



//On met les profils dans un tableau
$profils = array($chefProjet, $manager, $directeurProjet, $directeurRh, $directeurGeneral);

//On instancie les Utilisateurs
$nombreUtilisateur = readline("Entrer le nombre d'utilisateurs: ");

for ($i=0; $i < $nombreUtilisateur; $i++) { 
    $prenom = readline("Entrer le prenom: ");
    $nom = readline("Entrer le nom: ");
    $mail = readline("Entrer le mail: ");
    $tel = readline("Entrer le téléphone: ");
    $salaire = readline("Entrer le salaire: ");
    $login = readline("Entrer le login: ");
    $password = readline("Entrer le password: ");
    $service = readline("Entrer le service: ");
    //On créer une variable pour différencier les profils
    $j = readline("Quel profil ? 1 pour chef de Projet, 2 pour Manager, 3 pour le Directeur de Projet, 4 pour directeur des RH et 5 pour directeur général: ");
    if ($j == 1) {
        $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $chefProjet); 
    }elseif ($j == 2) {
        $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $manager); 
    }elseif ($j == 3) {
        $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurProjet); 
    }elseif ($j == 4) {
        $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurRh); 
    }elseif ($j == 5) {
        $utilisateur[$i] = new Utilisateur($prenom, $nom, $mail, $tel, $salaire, $login, $password, $service, $directeurGeneral); 
    }
}

// On affiche la liste des utilisateurs
echo "\n". "\n";
echo "La liste des Utilisateurs". "\n";
for ($i=0; $i < $nombreUtilisateur; $i++) { 
     $utilisateur[$i]->affiche();
}

echo "\n". "\n";


//On affiche les managers et on recalcule les salaires de tout le monde 

echo "La liste des Managers";
echo "\n";
for ($i=0; $i < $nombreUtilisateur; $i++) { 
    $utilisateur[$i]->calclulerSalaire();
        if ($utilisateur[$i]->get_profil()->getCode() == "MN") {
            $utilisateur[$i]->affiche();
        }
}



//test en dur
// $test = new Utilisateur ("Georges", "Abidbol", "michel@blanquer.fr", "5645845", 5000, "DarkSasuke", "****", "Harcélement", $manager);

// $test->affiche();
// echo PHP_EOL;
// $test->calclulerSalaire();
// echo PHP_EOL;
// $test->affiche();

?>