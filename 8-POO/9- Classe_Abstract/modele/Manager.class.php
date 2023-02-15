<?php

include_once "../modele/Personne.class.php";

class Manager extends Personne 
{
    private $service;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $service)
    { 
    // parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;
    $this->service = $service;
    }

    public function calculerSalaire()
    {
        return 1.35 * $this->salaire;
    }

    public function affiche() : void {
        echo 
        "\nLe salaire du Manager: " .$this->calculerSalaire();
        "\n Sa spécialité : " . $this->service."\n";
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