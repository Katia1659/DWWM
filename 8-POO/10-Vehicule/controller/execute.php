<?php

include_once('../model/Vehicule.class.php');
include_once('../model/Voiture.class.php');
include_once('../model/Camion.class.php');

// on crée un tableau pour les vehicules
$vehicule = array();
$vehicule[0] = new Voiture(1998,12699.2);
$vehicule[1] = new Voiture(2012,11500);
$vehicule[2] = new Voiture(2020,23695);
$vehicule[3] = new Camion(1992,8999);
$vehicule[4] = new Camion(1999,11050);
$vehicule[5] = new Camion(2016,19856);


//boucle pour l'augmentation su salaire et l'affichage
foreach ($vehicule as $ve) {
    $string = $ve->__toString();
    $ve->demarrer();
    $ve->accelerer();
    echo $string;
}



?>