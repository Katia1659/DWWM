<?php
Class Manager extends Personne {

    private string $service;

    public function __construct (string $nom,string $prenom,string $mail,string $telephone,float $salaire, string $service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }


    public function calculerSalaire() {
        echo "Le salaire normal de  ".$this->nom." ".$this->prenom." est de :".$this->salaire."€\n";
        $this->salaire = $this->salaire * 1.35;
        echo "après l'augmentation de salaire de ".$this->nom." ".$this->prenom."il est de :".$this->salaire."€\n";;
    } 

        public function affiche() {
            echo parent::affiche()." ".$this->nom." ".$this->prenom." est dans le service : ".$this->service."\n";
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

?>