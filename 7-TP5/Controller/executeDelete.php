
<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

unset($_SESSION);

$place = $_POST['place'];

supprimerInformation($place); 

header('Location: ../View/index.php');

?>