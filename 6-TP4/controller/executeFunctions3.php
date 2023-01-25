<?php 

include '../modele/functions.php';

session_start();

jsonToCSV($_SESSION['jsonFile']);

header('Location:../controller/Save/newList.csv');

$file='Save/newList.csv';

 
     // definir le header
     header('Content-Description: File Transfer');
     header('Content-Type: application/octet-stream');
     header('Content-Disposition: attachment; filename="'.basename($file).'"');
     header('Expires: 0');
     header('Cache-Control: must-revalidate');
     header('Pragma: public');
     header('Content-Length: ' . filesize($file));

        //  lire le fichier
        readfile($file);
        exit;