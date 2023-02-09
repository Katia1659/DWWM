<?php

include_once "../modele/Client.class.php";
include_once "../modele/Compte.class.php";

//compte 1

//On  demande les variables
$cin = readline("Donner le Cin: ");
$nom = readline("Donner le Nom: ");
$prenom = readline("Donner le Prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

//On créer l'objet
$compteTest = new Compte($cin, $nom, $prenom, $tel);

// on appelle des méthodes
echo $compteTest->afficherCpt();

$crediter = readline("Donner le montant à déposer: ");
$compteTest->crediter($crediter);

echo $compteTest->afficherCpt();

$debiter = readline("Donner le montant à retirer: ");
$compteTest->debiter($debiter);

echo $compteTest->afficherCpt();


//Compte 2

echo "Compte 2";
echo "\n";
echo "\n";

//On  demande les variables
$cin = readline("Donner le Cin: ");
$nom = readline("Donner le Nom: ");
$prenom = readline("Donner le Prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

//On créer l'objet
$compteTest2 = new Compte($cin, $nom, $prenom, $tel);


// on appelle des méthodes
echo $compteTest2->afficherCpt();

$crediter = readline("Donner le montant à créditer: ");
$compteTest2->crediterCpt($crediter, $compteTest);

$debiter = readline("Donner le montant à retirer: ");
$compteTest->debiterCpt($debiter, $compteTest2);

echo $compteTest->afficherCpt();
echo $compteTest2->afficherCpt();



//Nombre de Comptes
echo $compteTest->afficherNombreCpt();

echo "\n";

echo "ᚦᛓᛜᚱᛏᛣᛞ";




?>