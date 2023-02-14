<?php

include_once "../model/Etudiant.classs.php";
include_once "../model/Filiere.class.php";

//On instancie les différentes filières

$informatique = new Filiere ("info", "Informatique");
$communication = new Filiere("comm", "Techno de l'info et de communication");
$genie = new Filiere("génie", "Génie civil");


//On affiche les différentes filières
echo PHP_EOL;
echo "La liste des filières de notre école: ". PHP_EOL;
echo $informatique;
echo $communication;
echo $genie;

//On met les filières dans un tableau
$filiere = array($informatique, $communication, $genie);

//On instancie les étudiants (en dur)
// $etudiant1 = new Etudiant("Rashid", "Mohamed", "1995/01/02", $informatique);
// $etudiant2 = new Etudiant("Yves", "Chakib", "1992/04/02", $informatique);
// $etudiant3 = new Etudiant("Martin", "Manal", "2011/03/02", $communication);
// $etudiant4 = new Etudiant("Jacques", "Meriem", "2000/11/02", $genie);
// $etudiant5 = new Etudiant("Rami", "Mouad", "2013/01/02", $genie);

$nombreEtudiants = readline( "Entrer le nombre d'étudiants: ");

//On instancie les étudiants 
for ($i=0; $i < $nombreEtudiants; $i++) { 
    $prenom = readline("Entrer le prenom: ");
    $nom = readline("Entrer le nom: ");
    $dateNaissance = readline("Entrer la date de naissance: ");
    $j = readline("Quelle filiere ? 1 pour info, 2 pour comm et 3 pour le génie: ");
    if ($j == 1) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $informatique); 
    }elseif ($j == 2) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $communication); 
    }elseif ($j == 3) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $genie); 
    }
}


//On affiche les étudiants par filière en comparant le tableaux des filières et celui des étudiants
echo PHP_EOL;
echo "Liste des étudiant par filière: ";
echo PHP_EOL;
for ($i=0; $i < 3; $i++) { 
    echo $filiere[$i];
    for ($j=0; $j < $nombreEtudiants; $j++) { 
        if ($etudiant[$j]->get_filiere() == $filiere[$i]) {
            echo $etudiant[$j];
        }
    }
}
?>