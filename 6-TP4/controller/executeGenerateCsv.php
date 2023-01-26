<?php
include('../modele/functions.php');
generateCsv('../modele/Backup.json');
header('Location:../view/classe.php');

?>