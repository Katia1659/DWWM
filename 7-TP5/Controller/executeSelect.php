<?php

include "../Modele/DBManagement.php";

$statut = selectStagiaires($maListe);

if ($statut) {
    echo "ok!!!";
} else {
    echo "KO!!!";
}
// $filePath = $maListe;
// $data = rewriteData($filePath);
// generateTable($data);

header("Location: ../View/select.php");