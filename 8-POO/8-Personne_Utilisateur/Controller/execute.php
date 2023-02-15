<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Utilisateur.class.php";

//CREATION DES PROFILS 
$cp = new Profil("1", "CP");
$mn = new Profil("2", "MN");
$dp = new Profil("3", "DP");
$drh = new Profil("4", "DRH");
$dg = new Profil("5", "DG");

// CREATION DES UTILISATEURS
$utilisateur[1] = new Utilisateur("Filou", "AZERTY", "Boucherie", "philippe", "Saudemont", "FS@gmail.com", "0606060606", 500000, $cp);
$utilisateur[2] = new Utilisateur("tibout", "AZERTY", "Informatique", "Thibaut", "Saudemont", "TS@gmail.com", "0606060606", 500000, $mn);
$utilisateur[3] = new Utilisateur("ryry", "AZERTY", "Vétérinaire", "Henry", "Salvador", "HS@gmail.com", "0606060606", 500000, $dp);
$utilisateur[4] = new Utilisateur("Charlou", "AZERTY", "Pianiste", "Charlie", "Chocolat", "CC@gmail.com", "0606060606", 500000, $dg);
$utilisateur[5] = new Utilisateur("Charlou", "AZERTY", "Pianiste", "Sebastien", "legrand", "SL@gmail.com", "0606060606", 5000, $mn);
$utilisateur[6] = new Utilisateur("Charlou", "AZERTY", "Pianiste", "Jakub", "dhhtldbzv", "JD@gmail.com", "0606060606", 600, $mn);
$utilisateur[7] = new Utilisateur("Charlou", "AZERTY", "Pianiste", "Antony", "legamin", "SL@gmail.com", "0606060606", 10000, $mn);
$utilisateur[8] = new Utilisateur("Charlou", "AZERTY", "Pianiste", "Julien", "Lesims", "JL@gmail.com", "0606060606", 10000, $mn);


//MISE EN PLACE DE L'AUGEMENTATION EVENTUELLE
for ($i=1; $i <= sizeof($utilisateur); $i++) { 
    $utilisateur[$i]->calculerSalaire();
}

//AFFICHAGE DES INFORMATIONS DES UTILISATEURS
for ($i=1; $i <= sizeof($utilisateur); $i++) { 
    $utilisateur[$i]->Affiche();
}

//AFFICHAGE DES MANAGEURS 
echo "\nLa liste des Manager :\n";
for ($i = 1; $i <= sizeof($utilisateur); $i++) {
    $profil = $utilisateur[$i]->getProfil();
    if ($profil->getLibelle() == "MN") {
        echo $utilisateur[$i];
    }
}
