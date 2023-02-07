<?php

//creation d'une classe Point
Class Point{

    //on defini les attributs de la classe
    private $abscisse;
    private $ordonee;

    //definition du constructeur
    public function __construct ($abscisse,$ordonee){
        $this->abscisse = $abscisse;
        $this->ordonee = $ordonee;
        
    }

    //on defini la methode norme
    public function norme():float{
        $abscisse = $this->getAbscisse();
        $ordonee = $this->getOrdonee();

    $norme = sqrt(($ordonee ** 2 + $abscisse ** 2));
    return $norme;
    }

    public function afficherPoint():void{
        echo "Point($this->abscisse,$this->ordonee)";
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

    /**
     * Get the value of ordonee
     */ 
    public function getOrdonee()
    {
        return $this->ordonee;
    }

    /**
     * Set the value of ordonee
     *
     * @return  self
     */ 
    public function setOrdonee($ordonee)
    {
        $this->ordonee = $ordonee;

        return $this;
    }
}

?>