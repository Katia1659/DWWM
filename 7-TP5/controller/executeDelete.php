<?php

include "../modele/BDManagement.php";
session_start();

$status = deleteStagiraires($_POST);
if ($status) {
    $_SESSION['stagiaire'] = selectStagiaires();
    header('Location:../view/affichageDelete.php');
}else{
    echo "pas marcher";
}


?>