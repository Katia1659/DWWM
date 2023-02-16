<?php 

Class Professeur extends Employe {
    
    private string $specialite;

// On crée la méthode construct qui initialise les attributs de l'objet, avec l'appel de la méthode construct de la classe parent

    public function __construct (int $id, string $nom, string $prenom, float $salaire, string $specialite) {
        
        parent::__construct($id, $nom, $prenom,$salaire);
        $this->specialite = $specialite;
    }

// On crée la méthode toString qui permet de convertir un objet en string    
    public function __toString()
    {
        return parent::__toString() . "ma specialite est : ". $this->specialite;
    }


    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }








}

?>