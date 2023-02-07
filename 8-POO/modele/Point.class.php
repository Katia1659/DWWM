<?php

class Point
{//ATTRIBUTS
    public $abscisse;
    public $ordonne;

    //CONTRUCTION
    public function __construct($ord, $abs)
    {
        $this->abscisse = $abs;
        $this->ordonne = $ord;
    }

    //METHODE CALCUL DE LA NORME
    public function norme(): float
    {
        $reponse = sqrt(pow($this->abscisse, 2) + pow($this->ordonne, 2));
        return $reponse;
    }

    public function afficher() {
        echo "POINT($this->abscisse,$this->ordonne)\n";

    }
    

     // GET ET SET 
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
}
