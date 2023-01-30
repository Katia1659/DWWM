<?php
include "../Modele/DBManagement.php";

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$place = $_GET['place'];

$tabStag = array($nom ,$prenom ,$place);

$status = insertStagiaires($tabStag);

if ($status) {
    echo "insert ok!!!";
} else {
    echo "insert KO!!!";
}

?>