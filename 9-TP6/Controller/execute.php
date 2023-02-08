<?php 

// Liaison des fichiers
include_once "../Modele/Compte.class.php";

// Demandes des données à l'utilisateur

$cin = readline("Donner le CIN : ");
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prenom : ");
$tel = readline("Donner le numéro de téléphone : ");

// $client = new Client ($cin, $nom, $prenom, $tel);

// $client -> afficher();

$client1 = new Compte ($cin, $nom, $prenom, $tel );
$client1 -> afficher();

$solde = readline("Donner le montant à déposer : ")



?>