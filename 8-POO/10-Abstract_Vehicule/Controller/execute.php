<?php 
include_once "../Modele/Vehicule.class.php";
include_once "../Modele/Camion.class.php";
include_once "../Modele/Voiture.class.php";

//CREATION DES VEHICULES 
$camion[1] = new Camion ("E7A-12A", 10000 , 2000);
$camion[2] = new Camion ("77A-12P", 12000 , 1995);
$voiture[1] = new Voiture ("00P-OOL", 40000, 2020);
$voiture[2] = new Voiture ("LO0-JK1", 60000, 2022);

//AFFICHAGE DES INFORMATIONS DES CAMIONS
echo "Les camions : \n" ;
for ($i=1; $i <= count($camion); $i++) { 
    echo $camion[$i]."\n";
}

//AFFICHAGE DES INFORMATIONS DES VOITURES
echo "Les voitures : \n" ;
for ($i=1; $i <= count($voiture); $i++) { 
    echo $voiture[$i]."\n";
}


?>