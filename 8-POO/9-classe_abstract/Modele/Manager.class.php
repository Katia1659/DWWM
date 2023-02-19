<?php

class Manager extends Personne {
     //ATTRIBUTS
    private string $service ;

   //CONTRUCTION
    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $service) {
        parent :: __construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> service = $service ;
    }

    // CALCUL DE SALAIRE 
    public function calculerSalaire(): float {
       return $this -> salaire = $this -> salaire * 1.35;     
    }


    // AFFICHAGE DES INFORMATIONS 
    public function afficher () : void {
        echo "Le salaire du manager ". $this -> nom ." ". $this -> prenom ." est : ". $this -> salaire . " , son service : ". $this-> service ."\n";
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