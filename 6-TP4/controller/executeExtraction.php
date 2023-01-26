<?php 
include "../modele/functions.php";
session_start();

$file = '../modele/Backup.json';
ListStageCSV($file);
header('Location: ../modele/extraction_Stagiaire.csv');

?>