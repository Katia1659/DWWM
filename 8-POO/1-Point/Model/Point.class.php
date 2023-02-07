<?php
//On définie la class Point avec ses propriétés
Class Point{
    private $abscisse;
    private $ordonnee;
    
//On définie ses méthodes
    public function __construct($abscisse, $ordonnee)
    {
        echo "Done"."\n";
        $this->abscisse = $abscisse;  
        $this->ordonnee = $ordonnee;         
    }
 
    public function norme():float{
        $abscisse = $this->getAbscisse();
        $ordonnee = $this->getOrdonnee();
        $norme = sqrt(($abscisse**2)+($ordonnee**2));
        return $norme;
    }
//Tous les getter/setter 
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
}





?>