<?php 

include '../modele/Compte.class.php';




echo "Compte ".$code.":"."\n";
$cin = readline("Donner le CIN : ");
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prénom : ");
$tel = readline("Le numéro de téléphone : ");


$newClient = new Client($cin,$nom,$prenom,$tel);

$newCompte = new Compte($cin,$nom,$prenom,$tel,$solde,$code);

$code = $newCompte->getCode();
$solde = $newSolde->getCode();

$affichageCompte = $newCompte-> afficher($newClient);
echo $affichageCompte;


$somme = readline("Donner le montant à déposer: ");


$debit = $newCompte->debiter($somme);
echo $debit;

$debitCpt = $newCompte->debiterCpt($compte,$somme);
echo $debitCpt;



$debit = $newCompte->debiter($somme);

$debitCpt = $newCompte->debiterCpt($compte,$somme);