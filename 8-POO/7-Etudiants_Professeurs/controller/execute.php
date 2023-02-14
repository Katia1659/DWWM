<?php
include_once ( "../modele/Etudiant.Class.php");
include_once ("../modele/Personne.Class.php");
include_once ("../modele/Professeur.Class.php");
include_once("../modele/Employé.Class.php");

//Création Objet Personne
$id = 0;
$countEtudiant = 0;
$countProfesseur = 0;
echo "Les 2 étudiant\n";
for ($i=1; $i <3 ; $i++) { 
    echo "Etudiant N°$i\n" ;
    $nom = readline("Rentrez le Nom : ");
    $prenom = readline ("Rentrer le Prenom : ");
    $personneEtudiant[$i] = new Personne($id,$nom, $prenom);
    //création d'objet Etudiant
    $cne = readline ("Rentrer le CNE : ");
    $etudiant[$i] = new Etudiant($id, $nom, $prenom, $cne);
    $countEtudiant += 1;
}
echo "Les 2 professeurs\n";
for ($i=1; $i <3 ; $i++) { 
    echo "Professeur N°$i\n";
    
    $nom = readline("Rentrez le Nom : ");
    $prenom = readline ("Rentrer le Prenom : ");
    $personneEmployé[$i] = new Personne($id,$nom, $prenom);
    //création d'objet employé
    $salaire = readline ("Rentrer le salaire : ");
    $employé[$i] = new Employé($id, $nom, $prenom, $salaire);
    //création de professeur
    $specialité = readline ("Rentrer la spécialité : ");
    $professeur[$i] = new Professeur($id, $nom, $prenom, $salaire, $specialité);
    $countProfesseur += 1;
}















echo" La liste des étudiants :\n";
for ($i=1; $i <= $countEtudiant ; $i++) { 
    echo $etudiant[$i];
}
echo" La liste des professeurs :\n";
for ($i=1; $i <= $countProfesseur ; $i++) { 
    echo $professeur[$i];
}

















/*
print_r($etudiant);
echo "\n";
print_r($personneEtudiant);


echo $personneEtudiant;
echo "\n";
echo $etudiant;
*/

