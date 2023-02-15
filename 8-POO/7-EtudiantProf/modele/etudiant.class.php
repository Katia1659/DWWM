<?php
include_once("../modele/personne.class.php");

class Etudiant extends Personne {

    //attributs
    private string $cne;

    //methode construct qui appelle celui de son parent (personne)
    public function __construct($cne, $nom, $prenom){

        parent::__construct($nom, $prenom);
        $this->cne = $cne;
    }

    //methode toString qui appelle celui de son parent (personne)
    public function __toString(){

    return parent::__toString()." est le cne est : ".$this->cne;


    }



    //get et set des attributs
    /**
     * Get the value of cne
     *
     * @return string
     */
    public function getCne(): string
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @param string $cne
     *
     * @return self
     */
    public function setCne(string $cne): self
    {
        $this->cne = $cne;

        return $this;
    }
}




?>