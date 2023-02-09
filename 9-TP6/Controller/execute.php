<?php


include_once "../Modele/Client.class.php";
include_once "../Modele/Compte.class.php";

// On demande les informations du nouveau compte qu'on va créer. 

$cin =readline('Donner le CIN: ');
$nom =readline('Donner le Nom: ');
$prenom =readline('Donner le Prenom: ');
$tel =readline('Donner le numéro de téléphone: ');

// On crée un nouveau compte avec les informations recueillies précédemment. (Instanciation)

$compte1 = new Compte ($cin, $nom, $prenom, $tel);


// On affiche le numéro du compte ainsi que ses caractéristiques, y compris l'identification du client

echo "Compte ". $compte1->getCode()." : \n";

$compte1->afficheResumeCompte();

// On appelle la méthode crediter afin d'ajouter de l'argent sur le compte numéro 1

$compte1->crediter();

// On appelle la méthode debiter afin de retirer de l'argent depuis le compte numéro 1

$compte1->debiter();

// On demande des informations afin de créer un nouveau compte

$cin =readline('Donner le CIN: ');
$nom =readline('Donner le Nom: ');
$prenom =readline('Donner le Prenom: ');
$tel =readline('Donner le numéro de téléphone: ');

// On instancie ce nouveau compte

$compte2 = new Compte ($cin, $nom, $prenom, $tel);

// On affiche le second compte ainsi que ses caractéristiques. 

echo "Compte ". $compte2->getCode()." : \n";

$compte2->afficheResumeCompte();

// On crédite le compte 2 par l'intermédiaire du compte 1

$compte2->crediterCpt($compte1);

// On affiche les deux comptes afin de savoir si les modifications ont été enregistrées avec succès

$compte1->afficheResumeCompte();

$compte2->afficheResumeCompte();

// On débite le compte 1 afin de créditer le compte 2

$compte1->debiterCpt($compte2);

// On affiche les deux comptes afin de savoir si les modifications ont été enregistrées avec succès

$compte1->afficheResumeCompte();

$compte2->afficheResumeCompte();

// On affiche le nombre de comptes qui ont été crées

Compte::afficherCompteCree();

