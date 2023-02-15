<?php

/**
 * 
 * Classe Professeur
 */
class Professeur extends Employe
{
    private string $specialite;

    /**
     * Constructeur Class Professeur
     */
    public function __construct(string $nom, string $prenom, float $salaire, string $specialite)
    {
        parent::__construct($nom, $prenom, $salaire);
        $this->specialite = $specialite;
    }

    /**
     * Methode __toString() class Professeur
     * @return string
     */
    public function __toString(): string
    {
        return parent::__toString() . "\n\t Ma spécialité est : ". $this->specialite.".";
    }

    /**
     * Get the value of specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}
