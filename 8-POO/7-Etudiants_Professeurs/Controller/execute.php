<?php

// On inclue les différentes classes du modèle, ATTENTION il faut les déclarer dans l'ordre hiérarchique (La classe personne étant au sommet de la hiérarchie)

include_once "../Modele/Personne.class.php";
include_once "../Modele/Employe.class.php";
include_once "../Modele/Etudiant.class.php";
include_once "../Modele/Professeur.class.php";

// Instanciation des différents employés

$employe1 = new Employe (42, 'DOUK', 'Rachid', 10000);

$employe2 = new Employe (26, 'NGOYE', 'Roland', 12000);

// Instanciation des différents étudiants

$etudiant1 = new Etudiant (18, 'OBAKA', 'Med', 65678754);

$etudiant2 = new Etudiant (18, 'ALSENI', 'Thomas', 87543543);

// Instanciation des différents professeurs

$professeur1 = new Professeur(32, 'OBA', 'Kevin', 5700.00 , 'JAVA/JEE');

$professeur2 = new Professeur(24, 'MAGASSOUBA', 'Cheick', 5000, 'PHP');

// Via la méthode toString on affiche les différents employés, étudiants, et professeurs. 

echo "La liste des employés : \n";
echo $employe1."\n".$employe2."\n";

echo"La liste des étudiants : \n";
echo $etudiant1."\n". $etudiant2."\n";

echo"La liste des professeurs : \n";
echo $professeur1."\n".$professeur2."\n";


?>