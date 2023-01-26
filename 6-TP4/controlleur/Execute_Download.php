<?php
include '../modele/Function.php';
session_start();
$file = '../modele/Save_Backup/Extraction_Stagiaire.csv';
generateCsv('../modele/Save_Backup/Backup.json');
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

header('Location:../view/view.php');
?>