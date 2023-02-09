<?php 
include_once "../Model/Compte.class.php";
//L'éxécuteur afin de faire marcher le programme comme demdander.

echo "╔═══════════════════════════════════════════════════════════╗\n";
echo "║Compte 1 :                                                  \n";
echo "║                                                            \n";
$cin = readline("║► Donnez votre numéro CIN : ");
$nom = readline("║► Donnez votre Nom : ");
$prenom = readline("║► Donnez votre Prénom : ");
$tel = readline("║► Donnez votre numéro de Téléphone : ");
echo "╠═══════════════════════════════════════════════════════════╣\n";
$compte = new Compte($cin,$nom,$prenom,$tel);
$affichage1 = $compte->affichage();
echo $affichage1;
echo "╠═══════════════════════════════════════════════════════════╣\n";
$solde = readline("║Entrez le montant à créditer : ");
$compte->crediter($solde);
$affichage1 = $compte->affichage();
echo $affichage1;
echo "╠═══════════════════════════════════════════════════════════╣\n";
$solde = readline("║Entrez le montant à débiter : ");
$compte->debiter($solde);
$affichage1 = $compte->affichage();
echo $affichage1;
echo "╠═══════════════════════════════════════════════════════════╣\n";
echo "║Compte 2 : \n";
echo "║                                                            \n";
$cin = readline("║► Donnez votre numéro CIN : ");
$nom = readline("║► Donnez votre Nom : ");
$prenom = readline("║► Donnez votre Prénom : ");
$tel = readline("║► Donnez votre numéro de Téléphone : ");
echo "╠═══════════════════════════════════════════════════════════╣\n";
$compte2 = new Compte($cin,$nom,$prenom,$tel);
$affichage2 = $compte2->affichage();
echo $affichage2;
echo "╠═══════════════════════════════════════════════════════════╣\n";
echo "║Créditer le compte 2 à partir du compte 1\n";
$solde = readline("║Donnez le montant à déposer : ");
$compte->crediterCpt($solde,$compte2);
echo "╠═══════════════════════════════════════════════════════════╣\n";
echo "║Débiter le compte 1 et créditer le compte 2\n";
$solde = readline("║Donnez le montant à déposer : ");
$compte2->debiterCpt($solde,$compte);
echo "╠═══════════════════════════════════════════════════════════╣\n";
$affichage1 = $compte->affichage();
echo $affichage1;
echo "╠═══════════════════════════════════════════════════════════╣\n";
$affichage2 = $compte2->affichage();
echo $affichage2;
echo "╠═══════════════════════════════════════════════════════════╣\n";
$total = $compte->getCode();
echo "║Le nombre de compte crée est : $total                           ║\n";
echo "╚═══════════════════════════════════════════════════════════╝\n";







?>