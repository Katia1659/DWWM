<?php

include_once '../modele/Personne.class.php';

class Etudiant extends Personne 
{
    protected int $id;
    private String $cne;
    public static $compteur = 1;



public function __construct($nom, $prenom,$cne)
{
    parent::__construct($nom,$prenom);
    $this->cne = $cne;

    self::$compteur++;
    $this->id = self::$compteur;
}

public function __toString()
{
    
    return "Je suis ".$this->nom." ".$this->prenom." mon CNE est : ".$this->cne."\n";

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