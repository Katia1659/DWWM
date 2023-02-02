<?php
include "../modele/functions.php";
include "../Modele/DBManagement.php";

//Creation du tableau des places 
$tabPlace = array();

for ($i = 0; $i < 16; $i++) {
    $a = $i + 1;
    $tabPlace[$i] = "Place_$a";
}

deleteTout();

//lancement du téléchargement du dossier "nom prenom" 
$fichier = readFileToArray($_FILES['file']['tmp_name']);

$fichier = json_encode($fichier);
$fichier = placesStagRotate($fichier);



// LANCEMENT DES fonctions pour créer les tableau nom, prenom 
$tabNom = tableauNom($fichier);
$tabPrenom = tableauPrenom($fichier);


//Ajout des tableaux, ligne par par dans la BDD
for ($i = 0; $i < sizeof($tabNom); $i++) {

    $nom = $tabNom[$i];
    $prenom = $tabPrenom[$i];
    $place = $tabPlace[$i];
    $tabStag = array($nom, $prenom, $place);
    $status = insertStagiaires($tabStag);
}
header('location:../view/index.php')
?>