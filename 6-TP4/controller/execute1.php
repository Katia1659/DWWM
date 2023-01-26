<?php
include_once ('../modele/fonctions.php');
session_start();
$filePath = '../controller/save/Backup.json';
saveListStageToCsv($filePath);

header('Location: ../view/affichage.php');


?>