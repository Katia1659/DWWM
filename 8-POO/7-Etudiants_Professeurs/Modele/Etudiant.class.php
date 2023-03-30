<?php


Class Etudiant extends Personne {

    private string $cne;

// On crée la méthode construct qui initialise les attributs de l'objet, avec l'appel de la méthode construct de la classe parent

    public function __construct(int $id, string $nom, string $prenom, string $cne)
    {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
}

// On crée la méthode toString qui permet de convertir un objet en string
public function __toString()
{
    return parent::__toString() . "mon CNE est : ". $this->cne;
}

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

}


?>