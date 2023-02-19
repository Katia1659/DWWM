<?php 
include_once "../Modele/Personne.class.php";
include_once "../Modele/Developpeur.class.php";
include_once "../Modele/Manager.class.php";
//CREATION DES PROFILS 
$developpeur1 = new Developpeur ("LACHGAR","Jean","jean@gmail.com","0612141454",10000,"JS");
$developpeur2 = new Developpeur ("LAN","Jak","jean@gmail.com","0612141454",10000,"JS");
$manager1 = new Manager ("JP","Pernault","jean@gmail.com","0612141454","10000","compta");
$manager2 = new Manager ("hugues","Jakcsman","jean@gmail.com","0612141454","10000","compta");

//LANCEMENT DES METHODES POUR CALCULER SALAIRE ET AFFICHER LES INFORMATIONS
$developpeur1 -> calculerSalaire();
$developpeur1 -> afficher();
$developpeur2 -> calculerSalaire();
$developpeur2 -> afficher();

$manager1 -> calculerSalaire();
$manager1 -> afficher();
$manager2 -> calculerSalaire();
$manager2 -> afficher();


?>