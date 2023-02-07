<?php
include_once"../modele/Livre.class.php";


$titre = readline("entrer le nom du livre : ");
$nom = readline("entrer le nom d'auteur' : ");
$prix= readline("entrer le prix du livre : ");

$livre1 = new Livre($titre,$nom,$prix);

$livre1->afficher();