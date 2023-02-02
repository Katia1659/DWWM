<?php
include ("../Model/function.php");

resetStag();
$listPlaces=array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");
$pathfile = $_FILES['file']['tmp_name'];
$listStag = ReadFileToArray($pathfile);
$listStagPlaces = array();

$listeStagesPlaces = generateStagPlaces($listPlaces,$listStag);
$tableauMulti = tabMulti($listeStagesPlaces);
$status = createStagiaires($tableauMulti);

if ($status) {
    header('Location:../View/main.php');
} else {

}



?>