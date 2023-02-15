<?php

include_once '../modele/Personne.class.php';
include_once '../modele/Etudiant.class.php';
include_once '../modele/Professeur.class.php';
include_once '../modele/Employe.class.php';
// $id =1;


//On remplit un tableau avec les etudiants
$tabEtudiant=[];

for ($i=0; $i < 2; $i++) 
{ 

echo "Etudiant ".Etudiant::$compteur."\n";

$nom = readline("Nom : ");
$prenom = readline("Prenom : ");
$cne = readline("CNE : ");

$newEtudiant = new Etudiant($nom,$prenom,$cne);

$tabEtudiant[$i] = $newEtudiant;

}



//On remplit un tableau avec les professeurs

$tabProfesseur=[];

for ($i=0; $i < 2; $i++) 
{ 

echo "Professeur ".Professeur::$compteur."\n";

$nom = readline("Nom : ");
$prenom = readline("Prenom : ");
$salaire = readline("Salaire : ");
$specialite = readline("Specialite : ");

$newProfesseur = new Professeur($nom,$prenom,$salaire,$specialite);

$tabProfesseur[$i] = $newProfesseur;

}

//On remplit un tableau avec les employes


$tabEmploye=[];

for ($i=0; $i < 2; $i++) 
{ 

echo "Employe ".Employe::$compteur."\n";

$nom = readline("Nom : ");
$prenom = readline("Prenom : ");
$salaire = readline("Salaire : ");

$newEmploye = new Employe($nom,$prenom,$salaire);

$tabEmploye[$i] = $newEmploye;

}


//On appelle les positions dans le tableau pour l'affichage
echo "La liste des étudiants : "."\n"."\n";

    echo $tabEtudiant[0];
    echo $tabEtudiant[1];

echo "La liste des professeurs : "."\n"."\n";

    echo $tabEmploye[0];
    echo $tabEmploye[1];

echo "La liste des employes : "."\n"."\n";

    echo $tabProfesseur[0];
    echo $tabProfesseur[1];