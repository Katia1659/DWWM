<?php
require_once '../modele/Etudiant.class.php';
require_once '../modele/Employe.class.php';
require_once '../modele/Professeur.class.php';

//Demande a l'utilisateur le nombre d'etudiant
$numEtud = readline("Combien d'etudiant : ");

//Demande a l'utilisateur les informations de l'etudiant
for ($i = 0; $i < $numEtud; $i++) {
    $e = "e$i";
    $nom = readline('Votre nom : ');
    $prenom = readline('Votre prenom : ');
    $cne = readline('Votre CNE : ');
    $$e = new Etudiant($nom, $prenom, $cne);
}

//Demande a l'utilisateur le nombre d'employe
$numEmp = readline("Combien d'employe : ");

//Demande a l'utilisateur les informations de l'employé
for ($i = 0; $i < $numEmp; $i++) {
    $emp = "emp$i";
    $nom = readline('Votre nom : ');
    $prenom = readline('Votre prenom : ');
    $salaire = readline('Votre salaire : ');
    $$emp = new Employe($nom, $prenom, $salaire);
}

//Demande a l'utilisateur le nombre de professeurs
$numPro = readline("Combien de professeurs : ");

//Demande a l'utilisateur les informations du professeur
for ($i = 0; $i < $numPro; $i++) {
    $p = "p$i";
    $nom = readline('Votre nom : ');
    $prenom = readline('Votre prenom : ');
    $salaire = readline('Votre salaire : ');
    $specialite = readline('Votre specialité : ');
    $$p = new Professeur($nom, $prenom, $salaire, $specialite);
}

echo "\n";

//Affiche les étudiants
echo "Liste des étudiants : \n";
for ($i = 0; $i < $numEtud; $i++) {
    $e = "e$i";
    echo $$e;
    echo "\n";
}

echo "\n";

//Affiche les employes
echo "Liste des employées : \n";
for ($i = 0; $i < $numEmp; $i++) {
    $emp = "emp$i";
    echo $$emp;
    echo "\n";
}

echo "\n";

//Affiche les proffesseurs
echo "Liste des professeurs : \n";
for ($i = 0; $i < $numPro; $i++) {
    $p = "p$i";
    echo $$p;
    echo "\n";
}
