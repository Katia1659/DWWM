<?php 

include_once "../Modele/Etudiant.class.php";


// filiere 1
$libelle = "Informatique";
$code = "01";
$filiere1 = new Filiere ($code, $libelle); 

// filiere 2
$libelle = "Techno de l'info et de communication";
$code = "02";
$filiere2 = new Filiere ($code, $libelle); 

// filiere 3
$libelle = "Génie civil";
$code = "03";
$filiere3 = new Filiere ($code, $libelle); 


// Données de l'étudiant
$prenom = "Rashid"; 
$nom = "Mohamed";
$dateNaissance = "1995/01/02"; 
// Instanciation des objets
$etudiant1 = new Etudiant ($nom, $prenom, $dateNaissance, $filiere1 ); 


// Données de l'étudiant
$prenom = "Yves"; 
$nom = "Chakib";
$dateNaissance = "1992/04/02"; 
// Instanciation des objets
$etudiant2 = new Etudiant ($nom, $prenom, $dateNaissance, $filiere1 ); 


// Données de l'étudiant
$prenom = "Martin"; 
$nom = "Manal";
$dateNaissance = "2011/03/02"; 
// Instanciation des objets
$etudiant3 = new Etudiant ($nom, $prenom, $dateNaissance, $filiere2 ); 


// Données de l'étudiant
$prenom = "Jacques"; 
$nom = "Meriem";
$dateNaissance = "2000/11/02"; 
// Instanciation des objets
$etudiant4 = new Etudiant ($nom, $prenom, $dateNaissance, $filiere3 ); 


// Données de l'étudiant
$prenom = "Rami"; 
$nom = "Mouad";
$dateNaissance = "2013/01/02"; 
// Instanciation des objets
$etudiant5 = new Etudiant ($nom, $prenom, $dateNaissance, $filiere3 ); 

$etudiant1 -> __toString();
$etudiant2 -> __toString();
$etudiant3 -> __toString();
$etudiant4 -> __toString();
$etudiant5 -> __toString();


echo "La liste des filières de l'école"; 

$filiere1 -> __toString();
$filiere2 -> __toString();
$filiere3 -> __toString();

echo $filiere1;
echo $filiere2;
echo $filiere3;

echo "\n\n Liste des étudiants par filière : \n";

echo $filiere1 ."\n";
echo $etudiant1."\n".$etudiant2."\n";

echo $filiere2 ."\n";
echo $etudiant3."\n";

echo $filiere3."\n" ;
echo $etudiant4."\n".$etudiant5."\n";

?>