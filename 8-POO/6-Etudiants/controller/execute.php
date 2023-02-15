<?php


include_once ("../modele/Class.Etudiants.php");
include_once ("../modele/Class.Filiere.php");

//creation filiere 

$info = "informatique";
$genieCivile = "genie civile";
$techno = "Techno de l'info et de communication";

$info = new Filiere($info);
$genie = new Filiere($genieCivile);
$techno = new Filiere($techno);

//liste filiere 

echo "liste des filières : \n";
echo $genie . "\n";
echo $info . "\n";
echo $techno . "\n";

echo "liste des etudiants par filière \n";

//filiere informatique avec etudiants

echo $info . "\n";

$nom = readline("entrez votre nom : ");
$prenom = readline("entrez votre preonm : ");
$dateNaiss = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
$stud = new Etudiant($nom,$prenom,$dateNaiss);

echo $stud;
echo "\n";


$nom2 = readline("entrez votre nom : ");
$prenom2 = readline("entrez votre preonm : ");
$dateNaiss2 = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
$stud2 = new Etudiant($nom2,$prenom2,$dateNaiss2);

echo $stud2;
echo "\n";

//filiere techno avec etudiants
echo $techno . "\n";

$nom3 = readline("entrez votre nom : ");
$prenom3 = readline("entrez votre preonm : ");
$dateNaiss3 = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
$stud3 = new Etudiant($nom3,$prenom3,$dateNaiss3);

echo $stud3;

//filiere genie civile avec etudiants
echo $genie . "\n";

$nom4 = readline("entrez votre nom : ");
$prenom4 = readline("entrez votre preonm : ");
$dateNaiss4 = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
$stud4 = new Etudiant($nom4,$prenom4,$dateNaiss4);

echo $stud4;


$nom5 = readline("entrez votre nom : ");
$prenom5 = readline("entrez votre preonm : ");
$dateNaiss5 = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
$stud5 = new Etudiant($nom5,$prenom5,$dateNaiss5);

echo $stud5;





?>