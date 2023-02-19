<?php 

Class Camion extends Vehicule {

    public function __construct($matricule , $prix, $annee){
        parent:: __construct ($matricule , $prix, $annee);
    }

    public function demarrer() :void {
        echo "On démarre";
    }

    public function accelerer() :void {
        echo "On accelere";
    }

    public function __toString () {

        return parent :: __toString () . "\nCe véhicule est un camion ";
    }


}

?>