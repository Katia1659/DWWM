<?php
include('../model/Employe.class.php');


//on demande a l'utilisateur de rentrer les donnés d'un employé
$matricule = readline("Entrez le matricule :");
$nom = readline("Entrez le nom :");
$prenom = readline("Entrez le prenom :");
$dateNaiss = readline("Entrez la date de naissance (JJ-MM-AAAA) :");
$dateEmbauche = readline("Entrez la date d'embauche (JJ-MM-AAAA) :");
$salaire = readline("Entrez le salaire :");

//on crée un objet employé en fonction des valeurs entrées par l'utilisateur
$employe = new Employe($matricule, $nom, $prenom, $dateNaiss, $dateEmbauche, $salaire);


//on affiche le resumé de l'objet employé
$employe->afficherEmploye($employe);

//on appelle la fonction pour augmenter les salaires
$employe->augmentationDuSalaire();
echo PHP_EOL."Apres augmentation des salaires".PHP_EOL;

////on affiche le resumé de l'objet employé apres augmentation des salaires
$employe->afficherEmploye($employe);

?> 