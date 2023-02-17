<?php

// on crée la classe abstraite personne qui ne pourra pas etre instancié mais servira de modele pour les classes developpeur et manager

abstract class Vehicule 
{
    private int $matricule;
    private int $anneeModele;
    private float $prix;
    public static $counter = 1;
    

    // creation constructeur
    public function __construct(int $anneeModele, float $prix)
    {
        $this->matricule = self::$counter++;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
    }

    //methode calculer salaire
    abstract public function demarrer(); 
    abstract public function accelerer();

    public function __toString(){
        $text = "matricule : $this->matricule année du modele : $this->anneeModele prix : $this->prix".PHP_EOL;
        return $text;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of anneeModele
     */ 
    public function getAnneeModele()
    {
        return $this->anneeModele;
    }

    /**
     * Set the value of anneeModele
     *
     * @return  self
     */ 
    public function setAnneeModele($anneeModele)
    {
        $this->anneeModele = $anneeModele;

        return $this;
    }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }
}
?>