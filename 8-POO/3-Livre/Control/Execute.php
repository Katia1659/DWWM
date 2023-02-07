<?php 
include_once "../Model/Livre.class.php";

//On demande les valeurs des différents paramètres liée à la class Livre, la boucle for permet de l'éxécuté 2 fois de suite comme demander dans l'exercice.
for ($i=1; $i <=2 ; $i++) { 
    $livre = "Livre_$i";
    $titre = readline("Donnez le Titre du livre $i : ");
    $auteur = readline("Donnez l'Auteur du livre $i: ");
    $prix = readline("Donnez le Prix du livre $i : ");
    $$livre = new Livre($titre,$auteur,$prix);
    $affichage = $$livre->affichage();
    echo "$affichage \n";
}



?>