<?php

include_once ('../modele/fonctions.php');

session_start();

$file = '../controller/save/Backup.json';


$fileCsv= ListStageCSV($file);

header('Location: extraction_Stagiaire.csv');


?>