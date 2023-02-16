<?php 

class Manager extends Personne
{
    private $service;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $service)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> service = $service;
    }

    public function calculerSalaire()
    {
        return $this -> salaire *= 1.35;
    }
    public function __toString()
    {
        $salaire = $this->calculerSalaire();
        return "Le salaire du manager " . $this->nom ." " .$this->prenom ." est : " .$salaire . " €, sa spécialité : ".$this->service;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}