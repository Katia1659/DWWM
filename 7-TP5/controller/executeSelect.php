<?php
include "../Modele/function.php";
session_start();

$_SESSION['listStag'] = selectStagiaires();
header('Location: ../view/select.php')

?>