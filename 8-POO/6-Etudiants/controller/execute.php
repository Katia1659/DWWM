<?php
include_once "../modele/Etudiant.class.php";
include_once "../modele/Filiere.class.php";

$filiere[1] = new Filiere("01", "Informatique ");
$filiere[2] = new Filiere("02", "Techno de l'info et de communication");
$filiere[3] = new Filiere("03", "Génie civil");



for ($j=1; $j < 4 ; $j++) { 
    echo $filiere[$j];
}
$etudiant[1] = new Etudiant("Anthony", "Canipel", "20/06/2002", $filiere[1]);
$etudiant[2] = new Etudiant("Seb", "leGrand", "20/06/1936", $filiere[1]);
$etudiant[3] = new Etudiant("Thibaut", "lePoulet", "20/06/1890", $filiere[2]);
$etudiant[4] = new Etudiant("yac", "vaauski", "20/06/1890", $filiere[2]);
$etudiant[5] = new Etudiant("julien", "speelbergue", "20/06/1890", $filiere[3]);


for ($i=1; $i < 6 ; $i++) { 
    echo $etudiant[$i];
}



?>
