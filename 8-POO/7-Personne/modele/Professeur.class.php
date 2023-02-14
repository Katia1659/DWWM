<?php
include_once '../modele/Employe.class.php';

class Professeur extends Employe {

    private String $specialite;
    public static $compteur = 1;
    protected int $id;

    public function __construct($nom, $prenom,$salaire, $specialite)
    {
        parent::__construct($nom, $prenom,$salaire,$specialite);
        $this->specialite=$specialite;
        
        self::$compteur++;
        $this->id = self::$compteur;
    }

    public function __toString()
    {
    
        return "Je suis ".$this->nom." ".$this->prenom." mon salaire est : ".$this->salaire."€ ma spécialité est : ".$this->specialite."\n";
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