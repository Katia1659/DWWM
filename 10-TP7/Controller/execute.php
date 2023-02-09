<?php

include_once "../Modele/Employe.class.php";
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$matricule = readline("Votre matricule : ");
$nom = readline("Votre nom : ");
$prenom = readline("Votre prénom : ");
$dateNaissance = readline("Votre date de naissance dd/mm/aaaa : ");
$dateEmbauche = readline("Votre date d'embauche dd/mm/aaaa : ");
$salaire = readline("Votre salaire : ");

/*LANCEMENT METHODE DE CREATION DES CLIENT ET COMPTE */
$employe1 = new employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

/*AFFICHE LES INFORMATIONS*/
$employe1 -> AfficherEmploye();

/*APPLICATION DE L'AUGMENTATION*/
$employe1->augmentationDuSalaire();

/*AFFICHE LES INFORMATIONS*/
$employe1 -> AfficherEmploye();

?>
