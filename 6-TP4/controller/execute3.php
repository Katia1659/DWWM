<?php 

include '../modele/functions.php';

session_start();

$_SESSION['jsonFile']='controller\save\Save.json';
jsonToCSV($_SESSION['jsonFile']);


header('Location:../controller/Save/newList.csv');

$file='Save/newList.csv';

 

   //   header('Content-Description: File Transfer');
     header('Content-Type: application/octet-stream');
     header('Content-Disposition: attachment; filename="'.basename($file).'"');
     header('Expires: 0');
     header('Cache-Control: must-revalidate');
     header('Pragma: public');
     header('Content-Length: ' . filesize($file));

     
        readfile($file);
        exit;




