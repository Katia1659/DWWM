<?php
include_once("../modele/personne.class.php");
include_once("../modele/employe.class.php");
include_once("../modele/etudiant.class.php");
include_once("../modele/professeur.class.php");


echo "liste des employé : \n";

// emp 1 
$nom = "Badouri";
$prenom = "Rachid";
$rachid = new Personne($nom,$prenom);
$salaire = 10000.00;
$emp1 = new Employe($salaire,$nom,$prenom);


//emp 2 
$nom2 = "Backer";
$prenom2 = "Theo";
$Theo = new Personne($nom2,$prenom2);
$salaire = 15000.50;
$emp2 = new Employe($salaire,$nom2,$prenom2);

//affiche employe
echo $emp1;
echo "\n";
echo $emp2;
echo "\n";
echo "\n";


echo "liste des etudiants : ";
echo "\n";

//etudiant 1
$nom = "Rachinas";
$prenom = "Thomas";
$personne = new Personne($nom,$prenom);

$cne = "02052000";
$stud = new Etudiant($cne,$nom,$prenom);

//etudiant 2 
$nom2 = "messuve";
$prenom2 = "alex";
$personne2 = new Personne($nom2,$prenom2);

$cne2 = "123456789";
$stud2 = new Etudiant($cne2,$nom2,$prenom2);


//affiche etudiants
echo $stud;
echo "\n";
echo $stud2;
echo "\n";


echo "\n";


//creation prof
echo "liste des prof : \n";

//prof 1 

$nom = "forma";
$prenom = "moussa";
$personne2 = new Personne($nom,$prenom);

$salaire = 15000;
$specialiste = "dev web";

$prof = new Professeur($specialiste,$salaire,$nom,$prenom);

//prof 2 

$nom2 = "forma";
$prenom2 = "nizar";
$personne2 = new Personne($nom2,$prenom2);

$salaire = 15050.12;
$specialiste = "dev web";

$prof2 = new Professeur($specialiste,$salaire,$nom2,$prenom2);

//affiche prof
echo $prof;
echo "\n";
echo $prof2;


?>