<?php
//inclure les include qui va faire le lien entre les class
include_once "../modele/Personne.class.php";
include_once "../modele/Utilisateur.class.php";
include_once "../modele/Profil.class.php";

//creation des profils
$profil1 = new Profil(1, "Chef de projet (CP)");
$profil2 = new Profil(2, "Manager (MN)");
$profil3 = new Profil(3, "Directeur de projet (DP)");
$profil4 = new Profil(4, "Directeur des ressources humaines (DRH)");
$profil5 = new Profil(5, "Directeur général (DG)");

//creation des utilisateur
$Utilisateur1 = new Utilisateur("canipel", "anthony", "antocani@gmail", "0625244174", "520", "hc20", "1009", "service", $profil1);
$Utilisateur2 = new Utilisateur("jakub", "vahauski", "vahaucani@gmail", "06545454174", "520", "yac", "785", "service", $profil2);
$Utilisateur3 = new Utilisateur("gregou", "pipou", "grgi@gmail", "0625244174", "1200", "hc20", "1009", "service", $profil3);
$Utilisateur4 = new Utilisateur("taumat", "leMat", "antocani@gmail", "0625244174", "1200", "hc20", "1009", "service", $profil4);
$Utilisateur5 = new Utilisateur("seb", "sebraien", "antocani@gmail", "0625244174", "1200", "hc20", "1009", "service", $profil5);

//affichage des utilisateur de de la method pour calculer le salaire
$Utilisateur1->affiche();
echo $Utilisateur1->calculerSalaire();

//affichage des utilisateur de de la method pour calculer le salaire
$Utilisateur2->affiche();
echo $Utilisateur2->calculerSalaire();

//affichage des utilisateur de de la method pour calculer le salaire
$Utilisateur3->affiche();
echo $Utilisateur3->calculerSalaire();

//affichage des utilisateur de de la method pour calculer le salaire
$Utilisateur4->affiche();
echo $Utilisateur4->calculerSalaire();

//affichage des utilisateur de de la method pour calculer le salaire
$Utilisateur5->affiche();
echo $Utilisateur5->calculerSalaire();

?>