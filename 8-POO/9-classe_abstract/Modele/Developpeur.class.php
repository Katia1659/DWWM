<?php 

// initialisation des attributs 

class Developpeur extends Personne {
    private string $specialite ; 

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite) {
        parent :: __construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> specialite = $specialite ;
    }

    // Création des méthodes de calcul et d'affichage 

    public function calculerSalaire() : float {
       return $this -> salaire = $this -> salaire * 1.2;     
    }

    public function afficher () : void {
        echo "Le salaire du développeur ". $this -> nom ." ". $this -> prenom ." est : ". $this -> salaire . " , sa specialité : ". $this-> specialite ."\n";
    }




    /**
     * Get the value of spiecialite
     */ 
    public function getSpiecialite()
    {
        return $this->spiecalite;
    }

    /**
     * Set the value of spiecialite
     *
     * @return  self
     */ 
    public function setSpiecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}


?>