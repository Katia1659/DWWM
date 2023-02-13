<?php
include"../modele/Etudiant.class.php";

$informatique= new Filiere("I11","Informatique");
$communication = new Filiere("C20","Communication & Technologie");
$genieCivile = new Filiere("B40", "Génie-Civile");

$filiers = array ($informatique,$communication,$genieCivile);

$etudiant1= new Etudiant ("HUNDA","Gundo", "22/11/1997",$informatique);
$etudiant2 = new Etudiant ("SAMI","Mehdi","05/01/1990", $communication);
$etudiant3= new Etudiant("LIMANE","NOHA","14/05/1992",$informatique);
$etudiant4 = new Etudiant("DUPONT","Joe","15/03/1981", $communication);
$etudiant5= new Etudiant("Mano","Dane","29/03/1991", $genieCivile);

$etudiants = array ($etudiant1,$etudiant2, $etudiant3,$etudiant4,$etudiant5);

foreach($filiers as $key=>$filiereObjet ){
    echo $filiereObjet;
    echo PHP_EOL;
    
    foreach ($etudiants as $key => $etudObjet )
    {
        if (Etudiant::equals($etudObjet,$filiereObjet))
        {
            echo $etudObjet;
            echo PHP_EOL;
        }

    }
}

