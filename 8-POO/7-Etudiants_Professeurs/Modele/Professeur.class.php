<?php

class Professeur extends Employe
{ //ATTRIBUTS
    private $specialite;

    //CONTRUCTION
    public function __construct(int $id, string $nom, string $prenom, int $salaire ,string $specialite)
    {
        parent::__construct( $id, $nom, $prenom, $salaire);
        $this->specialite = $specialite;
    }

    public function __toString()
    {
        return parent::__tostring() . " ma spécialité est: ". $this->specialite ;
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
