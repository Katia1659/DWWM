<?php

/**
 * Classe Etudiant
 */

class Etudiant extends Personne
{
    private int $cne;

    /**
     * constructeur classe Etudiant
     */

    public function __construct(int $cne, string $nom, string $prenom)
    {
        $this->cne = $cne;
        parent::__construct($nom, $prenom);
    }

    /**
     * methode __toString Etudiant
     * @return string
     */
    public function __toString(): string
    {
        return parent::__tostring() . " mon CNE est :". $this->cne.".";
    }

    /**
     * Get the value of cne
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}
