<?php

require('../modele/Personne.class.php');
require('../modele/Employe.class.php');
require('../modele/Etudiant.class.php');
require('../modele/Professeur.class.php');

// on crée 2 etudiant
$etudiant1 = new Etudiant (65678754,1, 'OBAKA', 'Med');
$etudiant2 = new Etudiant (87543543,2,'ALSENY','Thomas');

//on crée 2 employés
$employe1 = new Employe (11111,3, 'DOUK', 'Rachid');
$employe2 = new Employe (12345,4, 'NGOYE', 'Roland');

//on crée 2 professeurs
$prof1 = new Professeur('JAVA/JEE',5700,5,'OBA','Kevin');
$prof2 = new Professeur('PHP',5000,6,'MAGASSOUBA','Cheik');

// affichage
echo "La liste des employes : ".PHP_EOL.$employe1.PHP_EOL.$employe2.PHP_EOL.PHP_EOL;
echo "La liste des etudiants : ".PHP_EOL.$etudiant1.PHP_EOL.$etudiant2.PHP_EOL.PHP_EOL;
echo "La liste des professeurs : ".PHP_EOL.$prof1.PHP_EOL.$prof2.PHP_EOL.PHP_EOL;

?>