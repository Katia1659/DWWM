<?php
require_once '../modele/Voiture.class.php';
require_once '../modele/Camion.class.php';

$voit1 = new Voiture(1998, 29999.99);
$cam1 = new Camion(2005, 125352.99);
$voit2 = new Voiture(1985, 3500);
$cam2 = new Camion(2000, 80000);
$voit3 = new Voiture(2020, 325670.99);
$cam3 = new Camion(1990, 42530.95);

echo $voit1;
echo $cam1;
echo $voit2;
echo $cam2;
echo $voit3;
echo $cam3;

