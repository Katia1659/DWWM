<?php

/**
 * 
 * classe Employe
 */
class Employe extends Personne
{
    protected float $salaire;

    /**
     * Constructeur Class Employe
     */
    public function __construct(string $nom, string $prenom, float $salaire)
    {

        $this->salaire = $salaire;
        Personne::__construct($nom, $prenom);
    }

    /**
     * Methode __toString() classe Employe
     * @return string
     */
    public function __toString(): string
    {
        return Personne::__toString()." mon salaire est de : $this->salaire.";
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
