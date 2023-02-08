<?php

class Point
{
    //Initialisation des attributs
    private $abscisse;
    private $ordonne;

    public function __construct($abscisse, $ordonne){
        $this->abscisse = $abscisse;
        $this->ordonne = $ordonne;
    }

    /**
     * @return mixed
     */
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * @param mixed $abscisse
     */
    public function setAbscisse($abscisse)
    {
        $this->abscisse = $abscisse;
    }

    /**
     * @return mixed
     */
    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * @param mixed $ordonne
     */
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;
    }


    //methods qui calcule la norme du point.
    public function norme():float
    {
        $abscisse = $this->getAbscisse();
        $ordonne = $this->getOrdonne();
        $norme = sqrt(($abscisse**2) + ($ordonne**2));
        return  $norme;

    }
}