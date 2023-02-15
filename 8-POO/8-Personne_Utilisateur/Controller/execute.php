<?php

include_once "../Modele/Personne.class.php";
include_once "../Modele/Profil.class.php";
include_once "../Modele/Utilisateur.class.php";

// On instancie de nouveaux profils

$profil1 = new Profil (45, "Chef de projet");

$profil2 = new Profil(41, "Manager");

$profil3 = new Profil(47, "Directeur de projet");

$profil4 = new Profil (20, "Directeur des ressources humaines");

$profil5 = new Profil (14, "Directeur général");



// On instancie de nouveaux utilisateurs

$utilisateur[1] = new Utilisateur($profil2, 'Legrand','Sebastien', 'leg.sebastien@gmail.com', '07 83 85 92 70', 2000, 'Lulu', 'blabla10', 'management');

$utilisateur[2] = new Utilisateur($profil1, "Charly", "Lulu", "chalu@log.com", "05 6454 789", 2500, "chacha", "blabla", 'Compta');

$utilisateur[3] = new Utilisateur($profil5, 'Paul', 'Dorme', "p.dorme@gmail.com", "06 10 20 30 40", 5000, "paupaul", "blabla", "Direction");

$utilisateur[4] = new Utilisateur($profil4, 'Lucas', "V", "lulu@gmail.com", "06 50 60 70 80", 1500, "luluV", "blabla", "RH");



// On appelle la méthode calculerSalaire() pour chaque utilisateur, afin d'afficher le salaire de chacun des métiers

for ($i = 1; $i <= count($utilisateur); $i++) {
    $utilisateur[$i]->calculerSalaire();
    echo "\n";
}

// On appelle la méthode affiche() pour chaque utilisateur, afin d'afficher tous les utilisateurs et leurs caractéristiques

for ($i = 1; $i <= count($utilisateur); $i++) {
    $utilisateur[$i]->affiche();
    echo "\n";
}

// On affiche la liste des managers

echo "\nLa liste des managers est :\n";
for ($i = 1; $i <= count($utilisateur); $i++) {
    if ($utilisateur[$i]->getProfil()->getLibelle() == "Manager") {
        $utilisateur[$i]->affiche();
    }
}




