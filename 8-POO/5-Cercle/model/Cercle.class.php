<?php
include_once "../model/Point.class.php";
/* Creation d'une class Article afin de faire le calcul TTC et avoir un certain affichage*/

class Cercle extends Point {
    private float $abscisse;
    private float $ordonne;
    private float $r;
    public function __construct($abscisse,$ordonne, $r)
    {
        parent::__construct($abscisse,$ordonne, $r);
    }

    /**
     * @return float
     */
    public function getAbscisse(): float
    {
        return $this->abscisse;
    }

    /**
     * @param float $abscisse
     */
    public function setAbscisse(float $abscisse): void
    {
        $this->abscisse = $abscisse;
    }

    /**
     * @return float
     */
    public function getOrdonne(): float
    {
        return $this->ordonne;
    }

    /**
     * @param float $ordonne
     */
    public function setOrdonne(float $ordonne): void
    {
        $this->ordonne = $ordonne;
    }

    /**
     * @return float
     */
    public function getR(): float
    {
        return $this->r;
    }

    /**
     * @param float $r
     */
    public function setR(float $r): void
    {
        $this->r = $r;
    }
    public function getPerimetre():float
    {
        $r=$this->getR();
        $perimetre = (2*pi())*$r;
        return $perimetre;
    }
    public function getSurface():float
    {
        $r=$this->getR();
        $surface = $r**2*pi();
        return $surface;
    }
    public function appartient ($x,$y)
    {
        $abscisse = $this->getAbscisse();
        $ordonne = $this ->getOrdonne();
        $r = $this->getR();
        $racine =  sqrt();
        if ($racine<){
            echo "Appartient au cercle";
        }else{
            echo "n'appartient pas au cercle";
        }

    }
    public function afficherCercle()
    {
        echo "Le périmetre est : ".$this->getPerimetre()."\n"."La surface est : ".$this->getSurface()."\n".$this->afficher()."\n".$this->appartient();
    }
}
