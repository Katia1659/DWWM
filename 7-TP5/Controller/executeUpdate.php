<?php
include "../Modele/DBManagement.php";

$choix = $_POST['modif']; 
$id = $_POST['id']; 
$ancienNom = $_POST['ancienNom'];
$newNom = $_POST['newNom']; 

updateStagiaires( $id, $choix, $ancienNom, $newNom);




// $statut = updateStagiaires($_GET['id'],$_GET['nom'],$_GET['prenom']);

// if ($statut) {
//     echo "ok!!!";
// } else {
//     echo "KO!!!";
// }