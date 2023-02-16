<?php 

include_once "../Modele/Vehicule.class.php";
include_once "../Modele/Camion.class.php";
include_once "../Modele/Voiture.class.php";

$cam[1] = new Camion ("E7A-12A", 10000 , 2000);
$cam[2] = new Camion ("77A-12P", 12000 , 1995);

$voit[1] = new Voiture ("00P-OOL", 40000, 2020);
$voit[2] = new Voiture ("LO0-JK1", 60000, 2022);

echo "Les camions : \n" ;
for ($i=1; $i <= count($cam); $i++) { 
    echo $cam[$i]."\n";
}

echo "Les camions : \n" ;
for ($i=1; $i <= count($voit); $i++) { 
    echo $voit[$i]."\n";
}


?>