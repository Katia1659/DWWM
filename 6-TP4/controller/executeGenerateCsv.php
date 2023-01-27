<?php

include "../modele/function.php";

//On appelle la fonction pour générer le csv équivalent aux emplacement des stagiaires affichés
generateCsv("./JASON/postes_pc_version.json");

//chemin du fichier à télécharger
$localPath = './CSV/Backup.csv';

//méthode pour télécharger
if (file_exists($localPath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($localPath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($localPath));
    readfile($localPath);
    exit;
}

//renvoi vers la page d'affichage
header('Location: ../view/affichage.php')
?>