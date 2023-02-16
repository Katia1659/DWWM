<?php


<<<<<<< HEAD
// On initialise la classe Employe qui découle de la classe Personne
=======
// Initialisation de la classe 
>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1
Class Employe extends Personne {
    
    protected float $salaire;

<<<<<<< HEAD
// On crée la méthode construct qui initialise les attributs de l'objet, avec l'appel de la méthode construct de la classe parent
=======

>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1

    public function __construct(int $id, string $nom, string $prenom, float $salaire)
    {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
}

<<<<<<< HEAD
// On crée la méthode toString qui permet de convertir un objet en string

    public function __toString()
    {
        return parent::__toString() . "mon salaire est : ". $this->salaire. " € ";
=======
// Création de la méthode d'affichage et de récupération des données 

    public function __toString()
    {
        return parent::__toString() . "mon salaire est de : ". $this->salaire. " € ";
>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1
    }


    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}