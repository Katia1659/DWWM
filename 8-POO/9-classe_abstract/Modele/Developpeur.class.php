<?php 

class Developpeur extends Personne {
 //ATTRIBUTS
    private string $specialite ; 

   //CONTRUCTION
    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite) {
        parent :: __construct($nom, $prenom, $mail, $telephone, $salaire);
        $this -> specialite = $specialite ;
    }

    // CALCUL DE SALAIRE 
    public function calculerSalaire() : float {
       return $this -> salaire = $this -> salaire * 1.2;     
    }

    // AFFICHAGE DES INFORMATIONS 
    public function afficher () : void {
        echo "Le salaire du développeur ". $this -> nom ." ". $this -> prenom ." est : ". $this -> salaire . " , sa specialité : ". $this-> specialite ."\n";
    }




    /**
     * Get the value of spiecialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
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