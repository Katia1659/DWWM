<?php

include "Point.class.php";

class Cercle
{
    private $x;
    private $y;
    private $rayon;

    /**
     * constructeur cercle
     */

    public function __construct($x, $y, $rayon)
    {
        $this->x = $x;
        $this->y = $y;
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
        $calcule = pow(($xP - $this->x), 2) + pow(($yP - $this->y), 2);

        if (sqrt($calcule) <= $this->rayon) {
            echo "Le point appartient au cercle";
        } else {
            echo "Le point n'appartient pas au cercle";
        }
    }

    //Methode pour afficher les infos de l'article
    public function afficher()

    {
        echo "CERCLE($this->x,$this->y,$this->rayon)";
    }

    /**
     * Get the value of x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
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
}
