<?php
include_once("Personne.Class.php");
Class Developpeur extends Personne{
private string $specialite;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite){
        parent::__construct($nom,$prenom,$mail,$telephone, $salaire);
        $this->specialite = $specialite;
    } 
	public function calculerSalaire() {
        return 1.2 * $this->salaire;
        
    }
    public function __toString(){
        $this->salaire = $this->calculerSalaire();
        return "Le salaire du developpeur $this->nom $this->prenom est de :". "$this->salaire". " sa spécialité : $this->specialite". "\n"; 
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