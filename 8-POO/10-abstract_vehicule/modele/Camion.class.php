<?php 
//creation de la class camion 
Class Camion extends Vehicule {
//creation de la method construct
    public function __construct( int $anneeModele, float $prix)
    {
        parent::__construct( $anneeModele, $prix);

    }
//creation de la method demmarer 
    public function demarrer() : string{
        return "Le camion a démarré";
    }

//creation de la method accelere
    public function accelerer() : string {
        return "La vitesse maximale du camion est de 130 km/h";
    }

//creation de la method tostring
    public function __toString() {
        return "Ce véhicule est un camion, ".parent::__toString()." le prix de vente est de ".$this->getPrix()."€";
    }
}
?>