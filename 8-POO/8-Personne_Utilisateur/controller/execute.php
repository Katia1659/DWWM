<?php

include "../modele/Personne.class.php";
include "../modele/Profile.class.php";
include "../modele/Utilisateur.class.php";

//profile Métier :

$CP = new Profile("80", "Chef de Projet");
$MN = new Profile("100", "Manager");
$DP = new Profile("50", "directeur de projet");
$DRH = new Profile("2020", "Directeur des ressources humaines");
$DG = new Profile("56", "Directeur générale");

// Créer des utilisateurs avec les différents profils métiers.
$utilisateur1 = new Utilisateur(
    "LAMRI",
    "Kaouthar",
    "kawthar@gmail.com",
    "06 51 19 97",
    "2500",
    "Katia59",
    "158963",
    "Mangment",
    $MN
);

$utilisateur2 = new Utilisateur(
    "HUNDA",
    "GUNDA",
    "HUNDA@gmail.com",
    "06 51 29 17",
    "2500",
    "HUNDA59",
    "1589K63",
    "Gestion",
    $CP
);

$utilisateur3 = new Utilisateur(
    "DINO",
    "Pierre",
    "Pierre@yahoo.com",
    "07 58 30 26",
    "3500",
    "PIERRE5900",
    "100kml",
    "Gestion",
    $DP
);

$utilisateur4 = new Utilisateur(
    "RAMZI",
    "Rahim",
    "Rahim@gmail.com",
    "06 58 55 67",
    "1500",
    "RAMZI56K",
    "4500jaki",
    "RH",
    $DRH
);


$utilisateur5 = new Utilisateur(
    "MASSI",
    "YUBA",
    "MASSIYUBA@gmail.com",
    "06 88 01 97",
    "2500",
    "Massi56",
    "159963MASS",
    "Management",
    $DG
);

$listUtilisateurs = array($utilisateur1, $utilisateur2, $utilisateur3, $utilisateur4, $utilisateur5);


// Afficher la liste des utilisateurs.

foreach ($listUtilisateurs as $key => $value) 
{
    $value->calculerSalaire();
    $value->affiche();
    echo PHP_EOL;
}
// Filtrer la liste et afficher la liste des managers.


foreach ($listUtilisateurs as $key => $value) 
{
    if ($value->getProfile()->getLibelle() == $MN->getLibelle()) 
    {
        echo
        "*****************Liste Manager**************\n";
        $value->affiche();
        echo PHP_EOL;
        echo
        "********************************************\n";
    }
}
