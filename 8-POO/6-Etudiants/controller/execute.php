<?php


include_once ("../modele/Class.Etudiants.php");
include_once ("../modele/Class.Filiere.php");





// $etudiant = new Etudiant($nom,$prenom,$dateNaiss);



// echo $etudiant;

$info = "informatique";
$genieCivile = "genie civile";
$tecnho = "Techno de l'info et de communication";

1 == new Filiere($info);
2 == new Filiere($genieCivile);
3 == new Filiere($tehcno);


for ($i=1; $i <=5 ; $i++) { 
    $stud = new Etudiant($nom,$prenom,$dateNaiss);
    $nom = readline("entrez votre nom : ");
    $prenom = readline("entrez votre preonm : ");
    $dateNaiss = readline("entrez votres date de naissance (jj/mm/yyyy) : ");
    for ($j = 1; $j = 3; $j++){
        rand(1,3);
    }
}






?>