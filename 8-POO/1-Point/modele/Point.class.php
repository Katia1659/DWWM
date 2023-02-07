<?php

Class Point{
    //on définit les attributs de la classe
    private $abscisse;
    private $ordonnee;


    public function __construct (int $abscisse, int $ordonnee) {
        $this->abscisse = $abscisse;
        $this->ordonnee = $ordonnee;
    }
  
  
    //on définit les assesseurs
    /**
     * Get the value of abscisse
     */ 
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * Set the value of abscisse
     *
     * @return  self
     */ 
    public function setAbscisse($abscisse)
    {
        $this->abscisse = $abscisse;

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

    //On créer la méthode Norme
    public function Norme (): float {
        $abscisse = $this->getAbscisse();
        $ordonnee = $this->getOrdonnee();

        $norme = sqrt($abscisse**2 + $ordonnee**2);
        return $norme;
    }

}

?>