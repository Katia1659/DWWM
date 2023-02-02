

<?php


include('../Modele/functions.php');
include ('../Modele/DBManagement.php');

$chemin = $_FILES['file']['tmp_name'];
$stagiaires = readFileToArray($chemin);



$places = array();
for ($i=0; $i < 16 ; $i++) {
    $p = $i + 1;
    $places[$i] = "Place_$p";
}

for ($i=0; $i <count($places) ; $i++) { 
    $stagiaires[$i] = $stagiaires[$i]." $places[$i]";
}

for ($i = 0; $i < 16; $i++) {
    $valeurs = explode(" ", $stagiaires[$i]);
    $temp = [$valeurs[0], $valeurs[1], $valeurs[2]];
    $utilisateurs[$i] = $temp;
}
deleteAllStagiaire();
insertStagiaires($utilisateurs);
header('location:../View/index.html')

?>
