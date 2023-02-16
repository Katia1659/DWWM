<?php 


// Liaison des différents fichiers entre eux 
include_once "../Modele/Personne.class.php";
include_once "../Modele/Developpeur.class.php";
include_once "../Modele/Manager.class.php";


// Instanciation des objets de la classe developpeur 
$dev1 = new Developpeur ("LACHGAR","Jean","jean@gmail.com","0612141454",10000,"JS");
$dev2 = new Developpeur ("LAN","Jak","jean@gmail.com","0612141454",10000,"JS");

// Instanciation des objets de la classe manager
$man1 = new Manager ("JP","Pernault","jean@gmail.com","0612141454","10000","compta");
$man2 = new Manager ("hugues","Jakcsman","jean@gmail.com","0612141454","10000","compta");


// Méthode de calcul et d'affichage 
$dev1 -> calculerSalaire();
$dev1 -> afficher();

$dev2 -> calculerSalaire();
$dev2 -> afficher();

$man1 -> calculerSalaire();
$man1 -> afficher();


$man2 -> calculerSalaire();
$man2 -> afficher();


?>