<?php

include_once "../Modele/Compte.class.php";

/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$cin = readline("Donner Le CIN: ");
$nom = readline("Donner Le Nom: ");
$prenom = readline("Donner Le Prénom: ");
$tel = readline("Donner Le numéro de téléphone: ");

$client1 = new Client($cin, $nom, $prenom, $tel);
$compte1 = new Compte($client1);
$compte1->afficheCompte();

$montant = readline("Donner le montant à déposer: ");
$compte1->crediter($montant);
$compte1->afficheCompte();

$montant = readline("Donner le montant à retirer: ");
$compte1->debiter($montant);
$compte1->afficheCompte();

/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$cin = readline("Donner Le CIN: ");
$nom = readline("Donner Le Nom: ");
$prenom = readline("Donner Le Prénom: ");
$tel = readline("Donner Le numéro de téléphone: ");

$client2 = new Client($cin, $nom, $prenom, $tel);
$compte2 = new Compte($client2);
$compte2->afficheCompte();


// $cin = readline("Donner Le CIN: ");
// $nom = readline("Donner Le Nom: ");
// $prenom = readline("Donner Le Prénom: ");
// $tel = readline("Donner Le numéro de téléphone: ");

// $client2 = new Client($cin, $nom, $prenom, $tel);


// $compte2 = new Compte($client2);


// $compte2->afficheCompte();
