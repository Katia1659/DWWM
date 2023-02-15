<?php
include_once "../Model/Utilisateur.class.php";
include_once "../Model/Personne.class.php";



echo "╔╦╦══════════════════════════════════════════════════\n";
$nbr = readline("╠╬╣ ► Combien de profils voulez vous créer : ");

for ($i=1; $i <=$nbr ; $i++) { 
    $temp = "Profil_$i";
    $temp2 = "P_$i";
    echo "╠╬╬══════════════════════════════════════════════════\n";
    $nom = readline("╠╬╣ ► Donnez votre Nom : ");
    $prenom = readline("╠╬╣ ► Donnez votre Prénom : ");
    $mail = readline("╠╬╣ ► Donnez votre E-mail : ");
    $tel = readline("╠╬╣ ► Donnez votre Numéro de Téléphone : ");
    $salaire = readline("╠╬╣ ► Donnez votre Salaire : ");
    $login = readline("╠╬╣ ► Donnez votre Identifiant : ");
    $password = readline("╠╬╣ ► Donnez votre Mot de Passe : ");
    $service = readline("╠╬╣ ► Donnez votre Nom de Service : ");
    $libelle = $service;
    $code = readline("╠╬╣ ► Donnez l'abréviation de votre service : ");
    echo "╠╬╬══════════════════════════════════════════════════\n";
    $$temp2 = new Profile($code, $libelle);
    $$temp = new Utilisateur($nom,$prenom,$mail,$tel,$salaire,$login,$password,$service,$$temp2);
}

echo "╠╬╬══════════════════════════════════════════════════\n";
for ($i=1; $i <=$nbr ; $i++) { 
    $temp = "Profil_$i";
    $affichage = $$temp->affiche();
    echo $affichage;
    echo "╠╬╬══════════════════════════════════════════════════\n";
}
echo "╠╬╣ ► Liste des Managers : \n";
echo "╠╬╬══════════════════════════════════════════════════\n";
for ($i=1; $i <=$nbr ; $i++) { 
    $temp2 = "P_$i";
    $temp = "Profil_$i";
    if ($$temp2->getLibelle() == "Manager") {
        $affichage = $$temp->affiche();
        echo $affichage;
        echo "╠╬╬══════════════════════════════════════════════════\n";
        
    }
}
echo "╚╩╩══════════════════════════════════════════════════\n"


?>