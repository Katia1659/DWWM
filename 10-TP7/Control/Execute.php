<?php
include_once "../Model/Employe.class.php";


echo "╔╦══════════════════════════════════════════════════╗\n";
$matricule = readline("╠╣► Donnez votre Matricule : ");
$nom = readline("╠╣► Donnez votre Nom : ");
$prenom = readline("╠╣► Donnez votre Prénom : ");
echo "╠╣► Les formats de date sont sous la forme jj-mm-aaaa : \n";
$dateNaiss = readline("╠╣► Donnnez votre Date de Naissance : ");
$dateEmbauche = readline("╠╣► Donnez votre Date d'embauche :");
$salaire = readline("╠╣► Donnez votre Salaire : ");
$employe = new Employe($matricule,$nom,$prenom,$dateNaiss,$dateEmbauche,$salaire);
echo "╠╬══════════════════════════════════════════════════╝\n";
echo "╠╬══════════════════════════════════════════════════╗\n";
echo "╠╣► Employée avant l'augmentation de salaire :\n";
$employe->AfficherEmploye();
echo "╠╬══════════════════════════════════════════════════╝\n";
echo "╠╬══════════════════════════════════════════════════╗\n";
echo "╠╣► Employée après l'augmentation de salaire :\n";
$employe->augmentationDuSalaire();
$employe->AfficherEmploye();
echo "╚╩══════════════════════════════════════════════════╝\n";




?>