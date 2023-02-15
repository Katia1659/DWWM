<?php

include_once "../Modele/Personne.class.php";
include_once "../Modele/Employer.class.php";
include_once "../Modele/Etudiant.class.php";
include_once "../Modele/Professeur.class.php";

$employe1 = new Employer (42, 'DOUK', 'Rachid', 10000);

$employe2 = new Employer (26, 'NGOYE', 'Roland', 12000);

$etudiant1 = new Etudiant (18, 'OBAKA', 'Med', 65678754);

$etudiant2 = new Etudiant (18, 'ALSENI', 'Thomas', 87543543);

$professeur1 = new Professeur(32, 'OBA', 'Kevin', 5700.00 , 'JAVA/JEE');

$professeur2 = new Professeur(24, 'MAGASSOUBA', 'Cheick', 5000, 'PHP');

echo "La liste des employés : \n";
echo $employe1."\n".$employe2."\n";

echo"La liste des étudiants : \n";
echo $etudiant1."\n". $etudiant2."\n";

echo"La liste des professeurs : \n";
echo $professeur1."\n".$professeur2."\n";



?>