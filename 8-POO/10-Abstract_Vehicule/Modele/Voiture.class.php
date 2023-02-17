<?php 

// On crée une classe Voiture héritière de la classe abstraite Vehicule
Class Voiture extends Vehicule {

// On crée la méthode construct qui initialise les attributs de la classe, dans ce cas-ci les attributs découlent de la classe Vehicule

    public function __construct( int $anneeModele, float $prix)
    {
        parent::__construct($anneeModele, $prix);

    }

    // On crée la méthode demarrer() qui est rendue obligatoire par la méthode abstraite de la classe parent Vehicule

    public function demarrer() : string{
        return "La voiture a démarré";
    }

 // On crée la méthode accelerer() qui est rendue obligatoire par la méthode abstraite de la classe parent Vehicule

    public function accelerer() : string {
        return "La voiture a une vitesse maximale de 200 km/h";
    }

    // On crée la méthode toString qui permet de convertir un objet en chaîne de caractère
    public function __toString() : string {
        return "Ce véhicule est une voiture, ".parent::__toString()." il a été vendu au prix de ".$this->getPrix()."€";
    }

}