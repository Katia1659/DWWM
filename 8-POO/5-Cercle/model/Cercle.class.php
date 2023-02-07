<?php


class Cercle
{

    //on defini les attributs de la classe
    private $abscisse;
    private $ordonee;
    private $rayon;

    //definition du constructeur
    public function __construct($abscisse, $ordonee, $rayon)
    {
        $this->abscisse = $abscisse;
        $this->ordonee = $ordonee;
        $this->rayon = $rayon;
    }

    public function getPerimetre():float{
        $perimetre = $this->getRayon() * 2 * pi();
        return $perimetre;
    }

    public function getSurface():float{
        $surface = ($this->getRayon() * pi())**2;
        return $surface;
    }

    public function appartient($pointP) : void {
        $condition = sqrt(($this->getAbscisse() - $pointP->getAbscisse()) ** 2 + ($this->getOrdonee() - $pointP->getOrdonee()) ** 2);
        if ($condition < $this->rayon) {
            echo "Appartient au cercle";
        }else {
            echo "n'appartient pas au cercle";
        }
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
     * Get the value of ordonee
     */ 
    public function getOrdonee()
    {
        return $this->ordonee;
    }

    /**
     * Set the value of ordonee
     *
     * @return  self
     */ 
    public function setOrdonee($ordonee)
    {
        $this->ordonee = $ordonee;

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
?>