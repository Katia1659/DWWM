<?php 

include_once "../modele/client.class.php";
include_once "../modele/compte.class.php";


$cin = readline("donnez votre CIN : ");
$nom = readline("donnez votre nom : ");
$prenom = readline("donnez votre prenom : ");
$tel = readline("donnez votre telephone : ");
$compte1 = new Compte($cin,$nom,$prenom,$tel);
$compte1->afficher();

$somme = readline("quelle somme voulez vous crediter ? : ");
$compte1->crediter($somme);

$compte1->afficher();

$somme = readline("quelle somme voulez vous debiter ? : ");
$compte1->debiter($somme);

$compte1->afficher();



$cin = readline("donnez votre CIN : ");
$nom = readline("donnez votre nom : ");
$prenom = readline("donnez votre prenom : ");
$tel = readline("donnez votre telephone : ");

$compte2 = new Compte($cin,$nom,$prenom,$tel);
$compte2->afficher();

echo "crediter le compte 2 a partir du compte 1 \n ";
$somme = readline("donner le montant a déposer : ");
$compte2->crediterCpt($somme,$compte1);
echo "debiter le compte 1 et crediter le compte 2 \n ";
$somme = readline("donner le montant a retirer : ");
$compte1->debiterCpt($somme,$compte2);

$compte1->afficher();
$compte2->afficher();
