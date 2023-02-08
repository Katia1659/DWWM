<?php
include_once "../modele/Point.class.php";


$var= new Point(1,2);
print_r($var);
$norme=$var->norme();
print_r($norme);
?>
