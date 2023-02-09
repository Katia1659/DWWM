<?php
include_once "../modele/Employer.class.php";

//creation des readline pour donner les info du client
$matricule = readline("Matricule: ");
$nom = readline("Nom: ");
$prenom = readline("Prenom: ");
$dateNaissance = readline("Date de naissance (jj/mm/aaaa) : ");
$dateEmbauche = readline("Date mbauche (jj/mm/aaaa) : ");
$salaire = readline("Salaire : ");
echo "\n\n";

//creation de l'objet employer
$Employer = new Employer($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

//utilisation de la method afficher
$Employer -> afficherEmployer();


?>