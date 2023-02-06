<?php

class Rectangle
{
    private $longueur;
    private $largeur;



    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function perimetre() 

    {
        $peri = ($this->largeur + $this->longueur) * 2;
            return $peri;
    }


    public function aire() 

    {
        $aire =  $this->largeur*$this->longueur;
        return $aire;
    }

    public function estCarre() 

    {   
        // $aire =$this->longueur *$this->largeur;

        // $isSquare = gmp_perfect_square($aire);

        if ($this->longueur == $this->largeur) {
         return "C'est un carré";
        } else {
           return "Ce n'est pas un carré";
        }
        
    }

    public function afficherRectangle()
    {

        return "Longueur:[".$this->longueur."]-Largeur:[".$this->largeur."]-Perimètre[".$this->perimetre()."]-Aire[".$this->aire()."]-".$this->estCarre()."\n";
    }

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
