<?php

include "../Modele/DBManagement.php";

$statut = selectStagiaires($maListe);

if ($statut) {
    echo "ok!!!";
} else {
    echo "KO!!!";
}

array_to_table($maListe);


header("Location: ../View/select.php");