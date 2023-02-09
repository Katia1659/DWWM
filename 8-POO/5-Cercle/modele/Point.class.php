<?php

Class Point{
    //on définit les attributs de la classe
    private $x;
    private $y;

    //Constructeur d'initialisation
    public function __construct (float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }
  
    //===================== Méthodes =====================

    public function afficher(): string{
        $coordonnees = "POINT (". $this->x. ",". $this->y.").";
        return $coordonnees;
    }

    public function Norme (): float {
        $abscisse = $this->x;
        $ordonnee = $this->y;

        $norme = sqrt($abscisse**2 + $ordonnee**2);
        return $norme;
    }
  

    //===================== Méthodes d'accès =====================
    


    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}

?>