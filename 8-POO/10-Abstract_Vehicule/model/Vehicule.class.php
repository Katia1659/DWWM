<?php

abstract class Vehicule
{
    //on définit les attributs de la classe
    private int $matricule;
    private int $annee;
    private float $prix;
    public static $incrementation = 0;

    //Constructeur d'initialisation
    public function __construct(int $annee, float $prix)
    {
        self::$incrementation++;
        $this->matricule = self::$incrementation;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    //===================== Méthodes =====================

    abstract protected function demarrer();

    abstract protected function accelerer();

    public function __toString(): string
    {
        $afficher = "Matricule: ". $this->matricule. " , le modèle a été produit en ". $this->annee. " prix: ". $this->prix. PHP_EOL;
        return $afficher;
    }

    //===================== Méthodes d'accès =====================


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
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

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