<?php
Class Point {
    
    private $abscisse;
    private $ordonné;
    private $norme;

   public function __construct ($abscisse, $ordonné)
   {
    $this->abscisse = $abscisse;
    $this->ordonné = $ordonné;
    
   }
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

    
    public function getOrdonné()
    {
        return $this->ordonné;
    }

    /**
     * Set the value of ordonné
     *
     * @return  self
     */ 
    public function setOrdonné($ordonné)
    {
        $this->ordonné = $ordonné;

        return $this;
    }
    public function norme($abscisse,$ordonné)
    {
        $this->norme = sqrt(pow($abscisse,2)+ pow($ordonné,2));
        return $this;
    }
    
    
}