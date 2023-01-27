<?php

$test = "../controller/JASON/postes_pc_version.json";

     //on lis le fichier
     $json = file_get_contents($test);
     $tab = json_decode($json, true);

     //on remet en ordre le fichier         
     $tab = str_replace(" ", ";", $tab);

    $temp = '';
     foreach ($tab as $key => $value) {
        $keytemp = $key;
        $temp = $temp.$keytemp.";".str_replace(" ", ";", $value).PHP_EOL;        
    }

    //On créer le nouveau fichier
    $name = '../controller/CSV/Backup.csv';
    file_put_contents($name,$temp);
     


?>