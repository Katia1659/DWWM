<?php

// On crée une classe Rectangle 

class Rectangle {

    private $longueur;
    private $largeur;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }

// On crée la méthode périmètre qui permet de calculer le périmètre du rectangle 

    public function perimetre() : int {
        $perimetre = ($this->longueur + $this->largeur) * 2;
        return $perimetre;

    }

// On crée la méthode aire qui calcule l'aire du rectangle

    public function aire() : int {
        $aire = $this->longueur * $this->largeur;
        return $aire;
    }

// On crée une méthode estCarre afin de savoir si la figure est un carré ou non

    public function estCarre() : bool {
        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }
    }


// La méthode afficherRectangle permet d'afficher les caractéristiques du rectangle

    public function afficherRectangle(){
        $carre = $this->estCarre();
        echo "La longueur du rectangle est : " . $this->longueur. " \n" ; 
        echo "La largeur du rectangle est : ". $this->largeur." \n";  
        echo " - Longueur : " .$this->longueur. " - Largeur : ". $this->largeur. " - Périmètre : ". $this->perimetre($this->longueur, $this->largeur). " - Aire : ". $this->aire($this->longueur, $this->largeur). " \n"; 
         if ($this->estCarre() == true) {
            echo "C'est un carré \n ";
         } else {
            echo "Ce n'est pas un carré \n";
         }

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
}