<?php

include_once "../Modele/Etudiant.class.php";
include_once "../Modele/Filiere.class.php";

echo "La liste des filières de notre école : \n";

$filiere1 = new Filiere(00, 'Informatique');
$filiere2 = new Filiere(01, "Techno de l'info et de la communication");
$filiere3 = new Filiere(02, 'Génie civil');

echo  $filiere1;
echo  $filiere2;
echo  $filiere3;

$etudiant1 = new Etudiants('Mohamed', 'Rashid', '1992/01/02', $filiere1);

$etudiant2 = new Etudiants('Yves','Chakib', '1992/04/02', $filiere1);

$etudiant3 = new Etudiants('Martin', 'Manal', '2011/03/02', $filiere2);

$etudiant4 = new Etudiants('Jacques', 'Meriem', '2000/11/02', $filiere3);

$etudiant5 = new Etudiants('Remi', 'Mouad', '2011/03/02', $filiere3);



echo $etudiant1."\n";

echo $etudiant2."\n"; 

echo $etudiant3."\n";

echo $etudiant4."\n";

echo $etudiant5."\n";