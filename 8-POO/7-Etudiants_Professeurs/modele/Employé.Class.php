<?php
include_once ("Personne.Class.php");
Class Employé extends Personne {
    private int $salaire;
    
    public function __construct(int $id, string $nom,string $prenom,int $salaire ){
        parent::__construct( $id, $nom, $prenom);
        $this->id = $id-1;
        $this->salaire= $salaire;
    }
    public function __toString(){
        return parent::__toString()." mon salaire est : $this->salaire \n ";
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