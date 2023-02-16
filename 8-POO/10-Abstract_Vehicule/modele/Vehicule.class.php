<?php

abstract class Vehicule
{
    //initialisation des attributs
    private static int $_compteur = 1;
    private int $matricule;
    private int $annee_modele;
    private float $prix;

    //construct
    public function __construct($annee, $prix)
    {
        $this->matricule = self::$_compteur++;
        $this->annee_modele = $annee;
        $this->prix = $prix;
    }
    //method abstract
    abstract public function demarrer():string;
    abstract public function accelerer():string;

    //method toString
    public function __toString():string
    {
        return "Matricule : $this->matricule Année: $this->annee_modele Prix :$this->prix € \n";
    }

    /**
     * @return int
     */
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule(int $matricule): void
    {
        $this->matricule = $matricule;
    }

    /**
     * @return int
     */
    public function getAnneeModele(): int
    {
        return $this->annee_modele;
    }

    /**
     * @param int $annee_modele
     */
    public function setAnneeModele(int $annee_modele): void
    {
        $this->annee_modele = $annee_modele;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }



}
