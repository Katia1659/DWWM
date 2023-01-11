<?php

$liste = array();

$liste[1]='Baptiste';
$liste[2]='Florian';
$liste[3]='Jean-Baptiste';
$liste[4]='Gregory';
$liste[5]='Thomas';
$liste[6]='Maksen';
$liste[7]='Jakub';
$liste[8]='Lucas';
$liste[9]='Kaou';
$liste[10]='Sebastien';
$liste[11]='Thibaut';
$liste[12]='Julien';
$liste[13]='Paul';
$liste[14]='Anthony';
$liste[15]='Alexandre';






$premier =array_rand($liste);
$deux = array_rand($liste);
while ($premier == $deux) {
    $deux = array_rand($liste);
}

    echo $liste[$premier]."\n";
    echo $liste[$deux];
?>