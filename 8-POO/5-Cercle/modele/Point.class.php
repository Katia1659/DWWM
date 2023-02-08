<?php
Class Point {


    private $abscisse;
    private $ordonne;

    //creation de la method contrusct
        public function __construct($abscisse, $ordonne)
    {
            $this->abscisse = $abscisse;
            $this->ordonne = $ordonne;

        }
    
    //creation de la method norm
        public function norm():float{
            $abscisse = $this->getAbscisse();
            $ordonne = $this->getOrdonne();
            $centre = sqrt($abscisse** 2 + $ordonne** 2);

                return $centre;

        }

    //cration des method get et setter 
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

    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * Set the value of ordonne
     *
     * @return  self
     */ 
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;

        return $this;
    }
}

?>