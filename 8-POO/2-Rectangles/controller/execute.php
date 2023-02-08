<?php 
include_once "../modele/Rectangle.class.php";

$var = new Rectangle(3,4);
print_r($var);
echo PHP_EOL;
$perim = $var ->perim();
print_r($perim);
echo PHP_EOL;
$surface = $var -> surface();
print_r($surface);
echo PHP_EOL;
$ouiNon = $var -> ouiNon();
print_r($ouiNon);