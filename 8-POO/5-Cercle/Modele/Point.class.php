<?php

// Création d'une classe Point avec deux attributs

class Point
{
    private $abcisse;
    private $ordonnee;

// Création de la méthode construct

    public function __construct($x, $y){
        $this->abcisse = $x;
        $this->ordonnee = $y;
    }

// Création de la méthode norme afin de calculer la norme de deux points

    public function afficher($x, $y): String{
        
        return "Point ( ".$this->$x.",". $this->$y. " )";
        
    }







    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */ 
    public function getOrdonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function setOrdonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }
}
