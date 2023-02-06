<?php


class Rectangle
{ //ATTRIBUTS
    public $longueur;
    public $largeur;

    //CONTRUCT
    public function __construct($long, $larg)
    {
        $this->longueur = $long;
        $this->largeur = $larg;
    }

    //Fonction périmetre
    function perimetre(): float
    {
        $perim = ($this->longueur + $this->largeur) * 2;
        return $perim;
    }

    //Fonction aire
    function aire(): float
    {
        $aire = ($this->longueur * $this->largeur);
        return $aire;
    }

    //Fonction carre
    function estCarre(): bool
    {
        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }
    }

    function afficherRectangle() : void
    {
        //CALCUL DU PERIMETRE
        $peri = $this->perimetre();
        echo "Périmétre : $peri \n";

        //CALCUL DE L'AIR
        $aire =  $this->aire();
        echo "Aire : $aire \n";

        //SAVOIR S4IL S'AGIT D'UN CARRE
        if ($this->estCarre() == true) {
            echo "Il s'agit d'un carré";
        } else {
            echo "Ce n'est pas un carré";
        }
    }


    // GET ET SET 
    /**
     * Get the value of longueur
     */
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

    /**
     * Get the value of largeur
     */
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
