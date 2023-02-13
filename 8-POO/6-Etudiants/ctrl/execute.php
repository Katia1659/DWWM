<?php
include_once "../modele/Etudiant.class.php";

$info = new Filiere(2,"Informatique");
$comm = new Filiere(3,"Techno de l'info et de communication");
$geniecivil = new Filiere(4,"Génie civil");

$etudiant1 = new Etudiant("Rashid","Mohamed","02/01/1995",$info);
$etudiant2 = new Etudiant("Yves","Chakib","02/04/1992",$info);
$etudiant3 = new Etudiant("Martin","Manal","02/03/2011",$comm);
$etudiant4 = new Etudiant("Jacques","Meriem","02/11/2000",$geniecivil);
$etudiant5 = new Etudiant("Rami","Mouad","02/01/2013",$geniecivil);

// echo $etudiant1->getFiliere()->getLibelle();
// echo PHP_EOL;
// echo $geniecivil->getLibelle();

$fillers = array($info,$comm,$geniecivil);
$etudiants = array($etudiant1,$etudiant2,$etudiant3,$etudiant4,$etudiant5);

foreach($fillers as $key => $filler){
    echo $filler;
    echo PHP_EOL;
    foreach($etudiants as $key => $etudiant)
    {
        $filiereEtud = $etudiant->getFiliere();
        if($filiereEtud->getLibelle()== $filler->getLibelle())
        {
            echo $etudiant;
            echo PHP_EOL;
        }
    }

}