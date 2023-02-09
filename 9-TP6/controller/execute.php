<?php 

include_once "../modele/client.class.php";
include_once "../modele/compte.class.php";

//demande info pour 1er compte et le créer
$cin = readline("donnez votre CIN : ");
$nom = readline("donnez votre nom : ");
$prenom = readline("donnez votre prenom : ");
$tel = readline("donnez votre telephone : ");
$compte1 = new Compte($cin,$nom,$prenom,$tel);


//affiche compte 1 
$compte1->afficher();


//demande et credier une somme compte 1 
$somme = readline("quelle somme voulez vous crediter ? : ");
$compte1->crediter($somme);


//affiche compte 1 avec la somme rejoutée
$compte1->afficher();


//demande et debite une comme compte 1 
$somme = readline("quelle somme voulez vous debiter ? : ");
$compte1->debiter($somme);


//affiche compte 1 avec la somme debitée
$compte1->afficher();




//demande info compte 2 et le créer
$cin = readline("donnez votre CIN : ");
$nom = readline("donnez votre nom : ");
$prenom = readline("donnez votre prenom : ");
$tel = readline("donnez votre telephone : ");
$compte2 = new Compte($cin,$nom,$prenom,$tel);


//affiche compte 2 
$compte2->afficher();


// vire du compte 1 vers le compte 2 + retrait compte 1 
echo "crediter le compte 2 a partir du compte 1 \n ";
$somme = readline("donner le montant a déposer : ");
$compte2->crediterCpt($somme,$compte1);
echo "\ndebiter le compte 1 et crediter le compte 2 \n ";
$somme = readline("donner le montant a retirer : ");
$compte1->debiterCpt($somme,$compte2);


//affiche les 2 comptes
$compte1->afficher();
$compte2->afficher();



//affiche le nombre de compte créés
$compte1-> afficheNbCompte();



