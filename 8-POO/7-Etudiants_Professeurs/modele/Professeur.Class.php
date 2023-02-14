<?php
include_once ("Employé.Class.php");

Class Professeur extends Employé {
    private string $spécialité;
    
    public function __construct(int $id, string $nom,string $prenom,int $salaire, string $spécialité) {
        parent::__construct( $id, $nom, $prenom, $salaire);
        $this->id = $id-1;
        $this->spécialité = $spécialité;
    }
    public function __toString(){
        return parent::__toString()."ma spécialité est : $this->spécialité.\n";
    }

    /**
     * Get the value of spécialité
     */ 
    public function getSpécialité()
    {
        return $this->spécialité;
    }

    /**
     * Set the value of spécialité
     *
     * @return  self
     */ 
    public function setSpécialité($spécialité)
    {
        $this->spécialité = $spécialité;

        return $this;
    }
}