<?php

//class abstract vehicule
abstract Class Vehicule{
    private int $matricule = 0;
    private string $anneeModele;
    private int $prix;
    //conteur des matricule
    public static int $count = 0;

    //le constructeur de la class vehicule
    public function __construct( string $anneeModele,int $prix)
    {       
        $this->matricule = self::$count++;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
    }

    abstract public function demarrer();

    abstract public function accelerer();

    //function to string (affichage) commune a camion et voiture

    public function __toString()
    {
        return "Matricule : ".$this->getMatricule()." / ". $this->getAnneeModele()." / ". $this->getPrix();
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