<?php
include('../model/Compte.class.php');

//on demande a l'utilisateur de rentrer les informations du compte
echo "► Compte 1 :".PHP_EOL;
$cin = readline("Donner le CIN :");
$nom = readline("Donner le Nom :");
$prenom = readline("Donner le Prenom :");
$tel = readline("Donner le numero de téléphone :");

//on crée le compte
$compte1 = new Compte($cin, $nom, $prenom, $tel);
$compte1->afficherCpt();
$depot = readline("Donnez le montant a deposer : ");
$compte1->crediter($depot);
$compte1->afficherCpt();

//on demande le montant a debiter du compte 1
$retrait = readline("Donnez le montant a retirer : ");
$compte1->debiter($retrait);
$compte1->afficherCpt();

//on demande a l'utilisateur de rentrer les informations du compte2
echo "► Compte 2 :".PHP_EOL;
$cin = readline("Donner le CIN :");
$nom = readline("Donner le Nom :");
$prenom = readline("Donner le Prenom :");
$tel = readline("Donner le numero de téléphone :");

//on crée le compte2
$compte2 = new Compte($cin, $nom, $prenom, $tel);
$compte2->afficherCpt();

//on demande le montant a crediter sur le compte 2 et a debiter du compte 1
echo "Créditer le compte 2 à partir du compte 1" . PHP_EOL;
$montant = readline("Entre le montant a déposer : ");
$compte2->crediterCpt($montant,$compte1);
$compte1->afficherCpt();
$compte2->afficherCpt();

//on demande le montant a debiter du compte 1 et a crediter sur le compte 2 
echo "Débiter le compte 1 à partir du compte 2" . PHP_EOL;
$montant = readline("Entre le montant a retirer : ");
$compte2->debiterCpt($montant,$compte2);
$compte1->afficherCpt();
$compte2->afficherCpt();
$compte1->AfficherNbCompte();
?>