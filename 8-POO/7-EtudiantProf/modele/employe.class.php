<?php
include_once("../modele/personne.class.php");
class Employe extends Personne{

    //attributs
    protected float $salaire;

    //methode construct qui appelle celui de son parent (personne)
    public function __construct($salaire,$nom,$prenom){

        parent::__construct($nom,$prenom);
        $this->salaire = $salaire;

    }

    //methode toString qui appelle celui de son parent (personne)
    public function __toString(){
        return parent::__toString()." est le salaire est : ".$this->salaire;
    }


    //get et set des attributs 

    /**
     * Get the value of salaire
     *
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @param float $salaire
     *
     * @return self
     */
    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }
}




?>