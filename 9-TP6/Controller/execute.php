<?php

include_once "../Modele/Compte.class.php";

$tab = array();

/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$cin = readline("Donner Le CIN: ");
$nom = readline("Donner Le Nom: ");
$prenom = readline("Donner Le Prénom: ");
$tel = readline("Donner Le numéro de téléphone: ");

/*LANCEMENT METHODE DE CREATION DES CLIENT ET COMPTE */
$client1 = new Client($cin, $nom, $prenom, $tel);
$compte1 = new Compte($client1);

/*AFFICHE UN COMPTE  */
$compte1->afficheCompte();

/*AJOUTE DANS UN TABLEAU L'OBJET CREE*/
$tab[1] = $compte1;

/*CREDITER UN MONTANT SUR LE COMPTE 1*/
$montant = readline("Donner le montant à déposer: ");
$compte1->crediter($montant);

/*AFFICHE UN COMPTE  */
$compte1->afficheCompte();

/*DEBITER UN MONTANT SUR LE COMPTE 1*/
$montant = readline("Donner le montant à retirer: ");
$compte1->debiter($montant);

/*AFFICHE UN COMPTE  */
$compte1->afficheCompte();

/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$cin = readline("Donner Le CIN: ");
$nom = readline("Donner Le Nom: ");
$prenom = readline("Donner Le Prénom: ");
$tel = readline("Donner Le numéro de téléphone: ");

/*LANCEMENT METHODE DE CREATION DES CLIENT ET COMPTE */
$client2 = new Client($cin, $nom, $prenom, $tel);
$compte2 = new Compte($client2);

/*AFFICHE UN COMPTE*/
$compte2->afficheCompte();

/*AJOUTE DANS UN TABLEAU L'OBJET CREE*/
$tab[2] = $compte2;

// CREDITER A PARTIR D'UN AUTRE COMPTE 
$i = readline("Crediter le compte 2 à partir du compte ( 1 obligatoire dans cet exemple) : ");
$montant = readline("Donner le montant à déposer : ");
$compte2->crediterCpt($montant, $tab[$i]);

// DEBITER A PARTIR D'UN AUTRE COMPTE 
$i = readline("Debiter le compte 1 à partir du compte (  2 obligatoire dans cet exemple ) : ");
$montant = readline("Donner le montant à déposer : ");
$compte1->debiterCpt($montant, $tab[$i]);

//AFFICHAGE DES COMPTES 
$compte1->afficheCompte();
$compte2->afficheCompte();

//AFFICHAGE DU NOMBRE DE COMPTE 
$nbrCompte = Compte::$compteur;
echo "Le nombre de comptes crées: $nbrCompte";

