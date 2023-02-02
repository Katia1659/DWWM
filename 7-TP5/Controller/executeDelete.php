<?php 

include "../Modele/DBManagement.php";


$id = $_POST['id'];
 
deleteStagiaires($id);


header("Location: ../View/delete.php");