<?php
include '../modele/functions.php';

session_start();
$_SESSION['$fichier']=saveListStagToFileCsv($_SESSION['jsonFile']);

// $file='save\extraction_stagiare.csv';

 
//      // definir le header
//      header('Content-Description: File Transfer');
//      header('Content-Type: application/octet-stream');
//      header('Content-Disposition: attachment; filename="'.basename($file).'"');
//      header('Expires: 0');
//      header('Cache-Control: must-revalidate');
//      header('Pragma: public');
//      header('Content-Length: ' . filesize($file));
    
//         //  lire le fichier
//         readfile($file);
//         exit;
  
header( location : ..controller/save/extraction_stagiare.csv);