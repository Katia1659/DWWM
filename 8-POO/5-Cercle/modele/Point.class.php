<?php

class Point
{
    //Initialisation des attributs
    private float $abscisse;
    private float $ordonne;

    public function __construct($x, $y){
        $this->abscisse = $x;
        $this->ordonne = $y;
    }

    /**
     * @return mixed
     */
    public function getAbscisse(): float
    {
        return $this->abscisse;
    }

    /**
     * @param mixed $x
     */
    public function setAbsisse($x): void
    {
        $this->abscisse = $x;
    }

    /**
     * @return mixed
     */
    public function getOrdonne(): float
    {
        return $this->ordonne;
    }

    /**
     * @param mixed $y
     */
    public function setOrdonne($y): void
    {
        $this->ordonne = $y;
    }
    public function norme():float
    {
        $abscisse = $this->getAbscisse();
        $ordonne = $this->getOrdonne();
        $norme = sqrt(($abscisse**2) + ($ordonne**2));
        return  $norme;

    }
    //Method qui affiche le resultats.
    public function afficher(): void
    {
        $x = $this->getAbscisse();
        $y = $this->getOrdonne();
        echo "POINT($x , $y) \n";
    }
}
