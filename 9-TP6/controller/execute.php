<?php
require_once "../modele/Compte.class.php";

//Creation du compte 1
echo "Compte 1 : \n";
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le Nom: ");
$prenom = readline("Donner le Prenom: ");
$tel = readline("Donner le Téléphone: ");

$c1 = new Compte($cin, $nom, $prenom, $tel);
echo "Detail du compte : \n";
$c1->afficher();
echo "\n";
$somme = readline("Montant a deposer : ");
$c1->crediter($somme);
$c1->afficher();
echo "\n";
$somme = readline("Montant a debiter : ");
$c1->debiter($somme);
$c1->afficher();



//Creation du compte 2
echo "\n";
echo "Compte 2 : \n";
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le Nom: ");
$prenom = readline("Donner le Prenom: ");
$tel = readline("Donner le Téléphone: ");

$c2 = new Compte($cin, $nom, $prenom, $tel);
echo "Detail du compte : \n";
$c2->afficher();
//Virement entre les 2 comptes
echo "Crediter le compte 2 a partir du compte 1\n  ";
echo "Le solde du compte 1 : est ".$c1->getSolde()."\n";
$somme = readline("Montant a déposer ? : ");
$c2->crediterCpt($somme, $c1);
echo "Debiter le compte 1 a partir du compte 2 \n";
$somme = readline("Montant a Debiter ? : ");
$c1->debiterCpt($somme, $c2);
echo "\n";
$c1->afficher();
echo "\n";
$c2->afficher();
echo "\n";
Compte::afficherCompteCree();
