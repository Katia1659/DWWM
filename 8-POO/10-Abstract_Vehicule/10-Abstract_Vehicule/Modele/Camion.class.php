<?php 

Class Camion extends Vehicule {

    public function __construct($matricule , $prix, $annee){
        parent:: __construct ($matricule , $prix, $annee);
    }

    public function demarrer() :void {
        echo "Démarrage réussi";
    }

    public function accelerer() :void {
        echo "camion accelerer";
    }

    public function __toString () {

        return parent :: __toString () . "\nCe véhicule est un camion ";
    }


}

?>