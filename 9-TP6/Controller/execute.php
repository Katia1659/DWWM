<?php 

// Liaison des fichiers
include_once "../Modele/Compte.class.php";

$tab = array();


// Demandes des données à l'utilisateur

$cin = readline("Donner le CIN : ");
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prenom : ");
$tel = readline("Donner le numéro de téléphone : ");


// Instanciation de l'objet + affichage
$client1 = new Client ($cin, $nom, $prenom, $tel);
$compte1 = new Compte ($client1);
$compte1 -> afficher();
$tab[0]= $compte1;



echo "\n"; 

$solde = readline("Donner le montant à déposer : "); // Demandes des données à l'utilisateur


// méthode d'affichage et de calcul 
$compte1 -> crediter($solde);
$compte1 -> afficher();


echo "\n"; 

$solde = readline("Donner le montant à débiter : "); // Demandes des données à l'utilisateur

// méthode d'affichage et de calcul 
$compte1 -> debiter($solde);
$compte1 -> afficher();

echo "\n"; 

// Demandes des données à l'utilisateur
$cin = readline("Donner le CIN : ");
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prenom : ");
$tel = readline("Donner le numéro de téléphone : ");


// Instanciation de l'objet + affichage
$client2 = new Client ($cin, $nom, $prenom, $tel);
$compte2 = new Compte ($client2);
$compte2 -> afficher();
$tab[1]= $compte2;

echo "\n"; 

$solde = readline("Donner le montant à déposer : "); // Demandes des données à l'utilisateur

// méthode d'affichage et de calcul 
$compte2 -> crediter($solde);
$compte2 -> afficher();


echo "\n"; 

$solde = readline("Donner le montant à débiter : "); // Demandes des données à l'utilisateur

// méthode d'affichage et de calcul 
$compte2 -> debiter($solde);
$compte2 -> afficher();

echo "\n"; 

$solde = readline("Quelle somme voulez-vous créditer ? : "); // Demandes des données à l'utilisateur
$compte1 -> crediterCpt($compte2, $solde ); 

// méthode d'affichage 
echo "\n"; 
$compte1 -> afficher();

echo "\n"; 
$compte2 -> afficher();

echo "\n";

$solde = readline("Quelle somme voulez-vous débiter ? : "); // Demandes des données à l'utilisateur
$compte1 -> debiterCpt($compte2, $solde ); 


// méthode d'affichage 
$compte1 -> afficher();

echo "\n"; 
$compte2 -> afficher();

echo "\n"; 
$compte1 -> resume();

echo "\n"; 
Compte::nbCompte(); 

?>