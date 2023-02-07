<?php
include_once "../Modele/Livre.class.php";

//on demande a l'utilisateur les infos du livre
$titre = readline("Entrez le titre : ");
$auteur = readline("Entrez l'auteur : ");
$prix = readline("Entrez le prix : ");

//on crée le livre
$livre = new Livre ($titre,$auteur,$prix);
//on appelle la methode afficherLivre
$livre->afficherLivre();
?>