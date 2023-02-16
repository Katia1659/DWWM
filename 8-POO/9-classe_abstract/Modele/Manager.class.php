<?php

// On crée la classe Manager héritière de la classe Personne

Class Manager extends Personne {

    private string $service;

// On crée la méthode construct qui initialise les attributs de l'objet
    public function __construct (string $nom,string $prenom,string $mail,string $telephone,float $salaire, string $service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }

// On crée une méthode calculerSalaire qui permet de calculer le salaire en fonction du métier
    public function calculerSalaire() {
        echo "Le salaire de base de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";
        $this->salaire = $this->salaire * 1.35;
        echo "Le salaire après augmentation de ".$this->nom." ".$this->prenom." est ".$this->salaire."€\n";;
    } 

// On crée la méthode affiche qui affiche les informations du manager

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