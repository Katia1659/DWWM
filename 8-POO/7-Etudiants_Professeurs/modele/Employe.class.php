<?php
include_once '../modele/Personne.class.php';
class Employe extends Personne {

    protected int $salaire;
    protected int $id;
    public static $compteur = -1;

public function __construct($nom, $prenom,$salaire)
{
    parent::__construct($nom, $prenom);
    $this->salaire = $salaire;

    self::$compteur++;
        $this->id = self::$compteur;
}

public function __toString()
{
  
    return "Je suis ".$this->nom." ".$this->prenom." mon salaire est : ".$this->salaire."\n";

}


    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}