<?php
include "../modele/functions.php";
include "../Modele/DBManagement.php";

$tabPlace = array();

for ($i = 0; $i < 16; $i++) {
    $a = $i + 1;
    $tabPlace[$i] = "Place_$a";
}


$fichier = readFileToArray($_FILES['file']['tmp_name']);
$tabNom = tableauNom($fichier);
$tabPrenom = tableauPrenom($fichier);


for ($i = 0; $i < sizeof($tabNom); $i++) {

    $nom = $tabNom[$i];
    $prenom = $tabPrenom[$i];
    $place = $tabPlace[$i];
    $tabStag = array($nom, $prenom, $place);

    $status = insertStagiaires($tabStag);
}

if ($status) {
    echo "insert ok!!!";
} else {
    echo "insert KO!!!";
}

?>
