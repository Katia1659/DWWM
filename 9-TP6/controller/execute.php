<?php

include_once "../modele/Compte.class.php";
include_once "../modele/Client.class.php";

echo "Compte 1:".PHP_EOL;
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le nom: ");
$prenom = readline("Donner le prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

$client1 = new Compte($cin, $nom, $prenom, $tel);

echo "Détails du compte:".PHP_EOL;
echo "************************".PHP_EOL;
$client1->afficher();
echo "************************".PHP_EOL;

$client1 -> crediter();

$client1 -> debiter();


echo "*************************";
echo PHP_EOL;
echo PHP_EOL;
echo "Compte 2";
echo PHP_EOL;
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le nom: ");
$prenom = readline("Donner le prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

$client2 = new Compte($cin, $nom, $prenom, $tel);



$client2->afficher();


$client2 -> crediterCpt($client1);

$client1->afficher();



$client2 -> debiterCpt($client2);

$client2->afficher();

echo "Le nombres de comptes crées: 2";