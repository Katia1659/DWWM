<?php

Class Manager extends Personne {

    private string $service;


    public function __construct (string $nom,string $prenom,string $mail,string $telephone,float $salaire, string $service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }


    public function calculerSalaire() {
        echo "Le salaire de base de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";
        $this->salaire = $this->salaire * 1.35;
        echo "Le salaire après augmentation de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";;
    } 



        public function affiche() {
            echo parent::affiche()." il travaille dans le service ".$this->service."\n";
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