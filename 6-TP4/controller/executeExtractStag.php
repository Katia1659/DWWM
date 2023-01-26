<?php

require ('../model/functions.php');
$bJson = '../controller/Save/Save.json';
$date = datee();
$dir = "../Save$date.csv";
$save = tabCsv( $bJson, $dir);

    $file = $save;
    if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.'PlaceStagiaire.csv'.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
    }
    
    
    

//header('Content-Type: application/csv');
//header('Content-Disposition: attachment; filename="placeStagiaire.csv"');
header('Location: ../view/affichage.php');
?>


