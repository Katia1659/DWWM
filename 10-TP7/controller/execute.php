<?php

include "../modele/Employe.class.php";

$matricule = readline("entrez votre matricule : ");
$nom = readline("entez votre nom : ");
$prenom = readline("entrez votre prenom : ");
$dateNaiss = readline("entrez votre date de naissance (jj/mm/yyyy) : ");
$dateEmbauche = readline("entrez votre date d'embauche (jj/mm/yyyy) : ");
$salaire = readline("entrez votre salaire : ");
$emp1 = new Employe($matricule,$nom,$prenom,$dateNaiss,$dateEmbauche,$salaire);

echo $emp1->afficheEmploye();


?>