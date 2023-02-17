<?php 


// Création de classe abstraite Voiture et initialisation des attribut
Class Voiture extends Vehicule {

    public function __construct($matricule , $prix, $annee){
        parent:: __construct ($matricule, $prix, $annee);
    }

    //Création des méthodes d'affichage

    public function demarrer() :void {
        echo "Démarrage réussi";
    }

    public function accelerer() :void {
        echo "appuie sur le champignon chef";
    }

    public function __toString () {

        return parent :: __toString () . "\nCe véhicule est une voiture" ;
    }

    
}

?>