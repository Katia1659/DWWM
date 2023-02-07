<?php
require_once '../modele/Rectangle.class.php';
//Demande a l'utilisateur combien de livre il veut enregistrer.
echo 'Combien de Livre? : ';
$nbrLivre = readline();

//Boucle pour permettre d'entree les données
for ($i = 1; $i <= $nbrLivre; $i++){
    echo 'Quelle devise ? : ';
    $devise = readline();
    $livre = "livre$i";
    echo "Titre du $livre : ";
    $titre = readline();
    echo "Auteur du $livre: ";
    $auteur = readline();
    echo "Prix du $livre: ";
    $prix = readline();
    $$livre = new Livre($titre,$auteur,$prix, $devise);
    echo "Livre $i : ";
    $$livre->afficher();
}





