<?php
//creation d'une classe Point
class Rectangle
{

    //on defini les attributs de la classe
    private $longueur;
    private $largeur;

    //definition du constructeur
    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }

    //on defini la methode perimetre
    public function perimetre(): float
    {
        $longueur = $this->longueur;
        $largeur = $this->largeur;

        $perimetre = $longueur * 2 + $largeur * 2;
        return $perimetre;
    }
    //on defini la methode aire
    public function aire(): float
    {
        $longueur = $this->longueur;
        $largeur = $this->largeur;

        $aire = $longueur * $largeur;
        return $aire;
    }

    //on defini la methode estCarre
    public function estCarre(): bool
    {

        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }
    }

    public function afficherRectangle():void{
    $longueur = $this->getLongueur();
    $largeur = $this->getLargeur();
    $perimetre = $this->perimetre();
    $aire = $this->aire();

        echo "Longueur : $longueur - Largeur : $largeur - Perimetre : $perimetre - Aire : $aire".PHP_EOL;
        if ($this->estCarre()==true) {
            echo "c'est un carré";
        }elseif ($this->estCarre()==false) {
            
            echo "ce n'est pas un carré";
        }
        
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


?>