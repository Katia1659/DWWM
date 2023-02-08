<?php
require_once 'Point.class.php';
class Cercle
{
    //Initialisation des attributs
    private Point $centre;
    private float $rayon;

    //Constructor des attributs
    public function __construct($x, $y, $rayon)
    {
        $this->centre = new Point($x, $y);
        $this->rayon = $rayon;
    }

    /**
     * @return mixed
     */
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * @param mixed $rayon
     */
    public function setRayon($rayon): void
    {
        $this->rayon = $rayon;
    }

    /**
     * @return Point
     */
    public function getCentre(): Point
    {
        return $this->centre;
    }

    /**
     * @param Point $centre
     */
    public function setCentre(Point $centre): void
    {
        $this->centre = $centre;
    }



    //Method qui va chercher le perimetre du cercle
    public function getPerimetre(): float
    {
        $pi = pi();
        $rayon = $this->getRayon();
        $p = ($pi*2) * $rayon;
        return $p;
    }
    //Method qui va chercher la surface du cercle
    public function getSurface(): float
    {
        $pi = pi();
        $rayon = $this->getRayon();
        $surface = ($rayon**2) * $pi;
        return $surface;
    }

    //Method qui va dire si le point appartient ou non au cercle.
    public function appartient($x , $y): void
    {
        $abscisse = $this->getCentre()->getAbscisse();
        $ordonne = $this->getCentre()->getOrdonne();
        $r = $this->getRayon();
        $point = new Point($x, $y);
        $a = $point->getAbscisse();
        $b = $point->getOrdonne();
        $point->afficher();
        $racine = sqrt(($abscisse - $a)**2 + ($ordonne - $b)**2);
        if ($racine < $r) {
            echo "Le point appartient au cercle";
        }elseif ($racine > $r) {
            echo "Le point n'appartient pas au cercle";
        }
    }

    //Method qui affiche le result
    public function afficher(): void
    {
        $abscisse = $this->getCentre()->getAbscisse();
        $ordonne = $this->getCentre()->getOrdonne();
        $r = $this->getRayon();
        $p = $this->getPerimetre();
        $s = $this->getSurface();
        echo "CERCLE($abscisse, $ordonne, $r) \n";
        echo "Le périmétre est : $p \n";
        echo "La surface est : $s \n";
        echo "\n";
    }
}
