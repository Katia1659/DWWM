<?php 


include_once '../modele/Filiere.class.php';


$tabEtudiant = [];

//On met les etudiants dans un tableau
for ($i=0; $i < 5; $i++) 
{ 

echo "Etudiant ".Etudiant::$compteur."\n";

$nom = readline("Nom : ");
$prenom = readline("Prenom : ");
$dateNaissance = readline("Date de naissance (aaaa/mm/jj) : ");

$newEtudiant = new Etudiant($nom,$prenom,$dateNaissance);

$tabEtudiant[$i] = $newEtudiant;

}

//On met les filière dans un tableau


for ($i=0; $i < 3; $i++) 
{ 

    $code = readline("Code : ");
    $libelle = readline("Filière : ");

    $newFiliere = new Filiere($nom,$prenom,$dateNaissance,$code,$libelle);


    $filInfo[$i]= $newFiliere ;
}


//Affichage en sélectionnant les positions dans les tableaux

echo "Liste des étudiants par filière : \n";

echo $filInfo[0];

    echo $tabEtudiant[0] ;

echo $filInfo[1];

    echo $tabEtudiant[1] ;
    echo $tabEtudiant[2] ;
    echo $tabEtudiant[3] ;


echo $filInfo[2];

    echo $tabEtudiant[4] ;