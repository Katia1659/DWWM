<?php

include_once "../modele/Personne.class.php";
include_once "../modele/Employe.class.php";
include_once "../modele/Etudiant.class.php";
include_once "../modele/Professeur.class.php";

$employes = array(
    new Employe("DOUK", "Rachid", 10000.0),
    new Employe("NGOYE", "Roland", 10000.0)
);

$etudiants = array(
    new Etudiant("OBAKA", "Med", 65678754),
    new Etudiant("ALSENY", "Thomas", 87543543)
);

$professeurs = array(
    new Professeur("OBA", "Kevin", 5700.0, "JAVA/JEE"),
    new Professeur("MAGASSOUBA", "Cheick", 5000.0, "PHP"),
);

echo "La liste des employes :";
echo PHP_EOL;
foreach ($employes as $employe) {
    echo $employe;
    echo PHP_EOL;
}

echo "La liste des etudiants :";
echo PHP_EOL;
foreach ($etudiants as $etudiant) {
    echo $etudiant;
    echo PHP_EOL;
}

echo "La liste des professeurs :";
echo PHP_EOL;
foreach ($professeurs as $professeur) {
    echo $professeur;
    echo PHP_EOL;
}





