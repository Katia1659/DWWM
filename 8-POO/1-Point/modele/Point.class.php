<?php

Class Point{
    private $abscisse;
    private $ordonne;


    public function __construct($abscisse,$ordonne){
       
        $this->abscisse = $abscisse;
        $this->ordonne = $ordonne;
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
     * Get the value of ordonne
     */ 
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
    public function Norme(){

        $abscisse = $this->getAbscisse();
        $ordonne = $this->getOrdonne();

        $norme = sqrt($abscisse**2 + $ordonne**2);
        return $norme;
    }
}

?>