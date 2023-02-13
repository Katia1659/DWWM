<?php

include_once "../Modele/Etudiant.class.php";
include_once "../Modele/Filiere.class.php";

echo "La liste des filières de notre école : \n";

$filiere[1] = new Filiere(00, 'Informatique');
$filiere[2] = new Filiere(01, "Techno de l'info et de la communication");
$filiere[3] = new Filiere(02, 'Génie civil');

echo  $filiere[1];
echo  $filiere[2];
echo  $filiere[3];



$etudiant[1] = new Etudiants('Mohamed', 'Rashid', '1992/01/02', $filiere[1]);

$etudiant[2] = new Etudiants('Yves','Chakib', '1992/04/02', $filiere[1]);

$etudiant[3] = new Etudiants('Martin', 'Manal', '2011/03/02', $filiere[2]);

$etudiant[4] = new Etudiants('Jacques', 'Meriem', '2000/11/02', $filiere[3]);

$etudiant[5] = new Etudiants('Remi', 'Mouad', '2011/03/02', $filiere[3]);

echo $etudiant[1]."\n";

echo $etudiant[2]."\n"; 

echo $etudiant[3]."\n";

echo $etudiant[4]."\n";

echo $etudiant[5]."\n";

