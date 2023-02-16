<<<<<<< HEAD
<?php
// initialisation des attributs 


class Manager extends Personne {
    
    private string $service ;

    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $service) {
        parent :: __construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> service = $service ;
    }


    // Création des méthodes de calcul et d'affichage 
    public function calculerSalaire(): float {
       return $this -> salaire = $this -> salaire * 1.35;     
    }

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


=======
<?php 
>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1

?>