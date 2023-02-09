<?php
//On définie la class Point avec ses propriétés
Class Point{
    private $abscisse;
    private $ordonnee;
    
//On définie ses méthodes
    public function __construct($abscisse, $ordonnee){
        $this->abscisse = $abscisse;  
        $this->ordonnee = $ordonnee;         
    }
 
    public function affichage(){
        $abscisse= $this->getAbscisse();
        $ordonnee= $this->getOrdonnee();    
        echo "Point($abscisse,$ordonnee) \n";       
    }

//Tous les getter/setter 
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
}
    





?>