<?php
include_once "../model/Personne.class.php";
include_once "../model/Etudiant.class.php";
include_once "../model/Employe.class.php";
include_once "../model/Professeur.class.php";

//On instancie les différents objets
$etudiant1 = new Etudiant ("Rachid", "Douk", "65678754");
$etudiant2 = new Etudiant ("thomas", "alesny", "87543543");

$employe1 = new Employe("Med", "Obaka", 10000);
$employe2 = new Employe("Roland", "Ngoye", 10000);

$prof1 = new Professeur("Kevin", "Oba", 5700, "JAVA/JEE");
$prof2 = new Professeur("Cheick", "Magassouba", 5000, "PHP");


//On affiche les infos des différentes personnes
echo "La liste des étudiants: ". PHP_EOL;
echo $etudiant1. "\n". $etudiant2. "\n";

echo "La liste des employés". PHP_EOL;
echo $employe1. PHP_EOL. $employe2. PHP_EOL;

echo "La liste des professeurs". PHP_EOL;
echo $prof1. PHP_EOL. $prof2;


?>