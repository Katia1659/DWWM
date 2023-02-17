<?php 


Class Voiture extends Vehicule {


    public function __construct( int $anneeModele, float $prix)
    {
        parent::__construct($anneeModele, $prix);

    }


    public function demarrer() : string{
        return "La voiture va pouvoir demarer";
    }



    public function accelerer() : string {
        return "La vitesse maximale de la voiture et de 200 km/h";
    }

    public function __toString() : string {
        return "Ce véhicule est une voiture, ".parent::__toString()." le prix de vente et de ".$this->getPrix()."€";
    }

}
?>