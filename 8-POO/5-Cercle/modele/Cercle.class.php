<?php

include "Point.class.php";

class Cercle
{
    private Point $centre;
    private $rayon;

    /**
     * constructeur cercle
     */

    public function __construct($x, $y, $rayon)
    {
        $this->centre= new Point($x,$y);
        $this->rayon = $rayon;
    }
    /**
     * getPerimetre méthode qui retourne le perimetre du cercle
     * @return float
     */

    public function getPerimetre(): float
    {

        $peri = 2 * pi() * $this->rayon;

        return $peri;
    }
    /**
     * getSurface méthode qui retourne la surface du cercle
     * @return float
     */


    public function getSurface(): float
    {

        $surface = pi() * pow($this->rayon, 2);

        return $surface;
    }

    /**
     * appartient méthode qui vérifie si un point est à l'intérieur du cercle 
     * @return void
     */


    public function appartient(Point $point): void
    {
        $xP = $point->getX();
        $yP = $point->getY();
        $centre = $this->centre;
        $calcule = pow(($xP - $centre->getX()), 2) + pow(($yP - $centre->getY()), 2);

        if (sqrt($calcule) <= $this->rayon) {
            echo "Le point appartient au cercle";
        } else {
            echo "Le point n'appartient pas au cercle";
        }
    }

    //Methode pour afficher les infos de l'article
    public function afficher()

    {
        $centre = $this->centre;
        echo "CERCLE ( le centre est un ";
        $centre->afficher(); echo" 
         , et d'un rayon de:  $this->rayon ) \n";
        $perimetre= $this->getPerimetre();
        echo "Le périmètre est : $perimetre \n";
        $surface = $this->getSurface();
        echo "La surface est : $surface\n";

    }

    /**
     * Get the value of rayon
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }
}
