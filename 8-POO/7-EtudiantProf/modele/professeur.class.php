<?php
include_once("../modele/employe.class.php");

class Professeur extends Employe {

    //attributs
    private string $specialiste;

    //methode construct qui appelle celui de son parent (employe)
    public function __construct($specialiste,$salaire,$nom,$prenom){
        parent::__construct($salaire,$nom,$prenom);
        $this->specialiste = $specialiste;
    }

    //methode toString qui appelle celui de son parent (employe)
    public function __toString(){
        return parent::__toString()." est je suis specialisé en : ".$this->specialiste;
    }


    //get et set attributs
    /**
     * Get the value of specialiste
     *
     * @return string
     */
    public function getSpecialiste(): string
    {
        return $this->specialiste;
    }

    /**
     * Set the value of specialiste
     *
     * @param string $specialiste
     *
     * @return self
     */
    public function setSpecialiste(string $specialiste): self
    {
        $this->specialiste = $specialiste;

        return $this;
    }
}



?>