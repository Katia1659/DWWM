<?php
include_once "../modele/Livre.class.php";

/*POUR LE LIVRE*/
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
echo "Livre 1 :\n";
$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner prix : ");

/*CREACTION DE L'OBJET*/
$livre1 = new Livre ($titre, $auteur, $prix);
echo $livre1 -> afficher();

/*DEMANDE D'INFORMATION A L'UTILISATEUR */
echo "Livre 2 :\n";
$titre = readline("Donner le titre : ");
$auteur = readline("Donner l'auteur : ");
$prix = readline("Donner prix : ");

/*CREACTION DE L'OBJET*/
$livre2 = new Livre ($titre, $auteur, $prix);
echo $livre2 -> afficher();