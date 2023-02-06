<?php

Class Rectangle{


    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function perimetre():float{
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        $resultatPerimetre = ($longueur+$largeur)*2;
        return $resultatPerimetre;
    }
    public function aire():float{
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        $resultatAir = $longueur*$largeur;
        return $resultatAir;
    }
    public function estCarre():string{
        if ($this->longueur == $this->largeur ) {
            return true;
        } else {
            return false;
        }   
    }
    public function afficherRectangle($longueur, $largeur):string{
        return "Donner la longueur du rectangle: ".$longueur."Donner la largeur du rectangle: ".$largeur;
        $perimetre = $rectangle->perimetre();
        $aire = $rectangle->aire();
    } 


    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }


}

?>