<?php 

// Création de classe abstraite Camion et initialisation des attribut
Class Camion extends Vehicule {

    public function __construct($matricule , $prix, $annee){
        parent:: __construct ($matricule , $prix, $annee);
    }

     //Création des méthodes d'affichage

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