<?php
class Etudiant extends Personne{
    
    private string $cne;
    
    public function __construct(int $id,string $nom,string $prenom,string $cne)
    {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }

    /**
     * Get the value of c
     * en
     */ 
    public function __toString()
    {
        return parent::__toString().", mon cne est ".$this->cne;
    }

    /**
     * Set the value of cen
     *
     * @return  self
     */ 
    public function setCen($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}

?>