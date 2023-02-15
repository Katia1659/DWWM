<?php
class Employer extends Personne{
    protected float $salaire;

    public function __construct(int $id,string $nom,string $prenom, float $salaire)
    {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return parent::__toString().", mon salaire est de".$this->salaire." $";
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
?>