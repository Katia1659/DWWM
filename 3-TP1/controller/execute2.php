<?php /*
include "../model/functions.php";
session_start();
$_SESSION = NULL;
$listTitre = array(
    'Sleeping Beauties',
    'American Psycho',
    'Les Montagnes Hallucinées',
    'Le Dahlia Noir',
    'Vernon Subutex'
);
$listEcrivains = readFileToArray2('../controller/listeEcrivain.txt');
$monTableau = tableauEcrivains($listEcrivains, $listTitre);
$_SESSION['tableau'] = $monTableau;
print_r($monTableau);
header('Location: ../view/affichageLivres.php');
?>*/