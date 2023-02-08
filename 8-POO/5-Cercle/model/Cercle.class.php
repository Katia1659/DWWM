<?php
include('../model/Point.class.php');
class Cercle
{

    //on defini les attributs de la classe
    private Point $centre; //Objet de type Point
    private int $rayon; //le rayon : int

    //definition du constructeur
    public function __construct($x, $y, $rayon)
    {
        $this->centre = new Point($x, $y);
        $this->rayon = $rayon;
    }

    //definition de la methode getPerimetre
    public function getPerimetre():float{
        $perimetre = $this->getRayon() * 2 * pi();
        return $perimetre;
    }

    //definition de la methode afficher CERCLE(x,y,r)
    public function afficher():void{
        $x = $this->getCentre()->getAbscisse();
        $y = $this->getCentre()->getOrdonee();
        $r = $this->getRayon();
        echo "CERCLE($x,$y,$r)"; 
    }

    //definition de la methode getSurface
    public function getSurface():float{
        $surface = ($this->getRayon() * pi())**2;
        return $surface;
    }

    //definition de la fonction appartient
    public function appartient($pointP) : void {
        $condition = sqrt(($this->getCentre()->getAbscisse() - $pointP->getAbscisse()) ** 2 + ($this->getCentre()->getOrdonee() - $pointP->getOrdonee()) ** 2);
        if ($condition <= $this->rayon) {
            echo "Le point appartient au cercle";
        }else {
            echo "Le point n'appartient pas au cercle";
        }
    }

    ////////////////////////////Getter and Setter/////////////////////////////

    /**
     * Get the value of abscisse
     */ 
    

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
