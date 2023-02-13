<?php


include_once "../modele/Etudiants.class.php";
include_once "../modele/Filiere.class.php";

$filieres = array(
    new Filiere("Informatique"),
    new Filiere("Techno de l'info et de communication"),
    new Filiere("Génie civil")
);

$etudiants = array(
    new Etudiants("Rashid Mohamed", "1995/01/02", $filieres[0]),
    new Etudiants("Yves Chakib", "1992/04/02", $filieres[0]),
    new Etudiants("Martin Manal", "2011/03/02", $filieres[1]),
    new Etudiants("Jacques Meriem", "2000/11/02", $filieres[2]),
    new Etudiants("Rami Mouad", "2013/01/02", $filieres[2])
);

echo "La liste des filières de notre école :\n";
foreach ($filieres as $filiere) {
    echo $filiere . "\n";
}


echo "Liste des étudiants par filière :\n";
foreach ($filieres as $filiere) {
    echo $filiere . "\n";
    foreach ($etudiants as $etudiant) {
        if ($etudiant->getFiliere() == $filiere) {
            echo $etudiant . "\n";
        }
    }
}