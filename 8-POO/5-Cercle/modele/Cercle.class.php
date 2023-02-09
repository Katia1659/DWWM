<?php
include "Point.class.php";

class Cercle{
    //on définit les attributs de la classe

    private Point $_centre; //Objet de type Point
    private $rayon;

    //Constructeur d'initialisation
    public function __construct($x, $y, $rayon)
    {
        $this->_centre = new Point($x, $y);
        $this->rayon = $rayon;
    }

    //===================== Méthodes =====================

    public function getPerimetre(): string{
        $perimetre = 2 * pi() * $this->rayon;
        $afficher = "Le périmètre est de ". $perimetre;
        return $afficher;
    }

    public function getSurface(): string {
        $aire = pi() * ($this->rayon * $this->rayon);
        $afficher = "La surface est de ". $aire;
        return $afficher;
    }

    public function afficher(): string {
        $coordonnees = "Cercle (". $this->_centre->getX(). ",". $this->_centre->getY(). ",". $this->rayon. ").";
        return $coordonnees;
    }

    public function appartient($x, $y): string{
        if(((($x - $this->_centre->getX())**2) + (($y - $this->_centre->getY())**2)) < (($this->rayon)**2)){
            $affirmation = "Le point appartient au cercle";
        }else{
            $affirmation = "Le point n'appartient pas au cercle";
        }
        return  $affirmation;
    }

    //===================== Méthodes d'accès =====================
    
    /**
     * Get the value of _centre
     */ 
    public function get_centre()
    {
        return $this->_centre;
    }

    /**
     * Set the value of _centre
     *
     * @return  self
     */ 
    public function set_centre($_centre)
    {
        $this->_centre = $_centre;

        return $this;
    }
   

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    
}

?>