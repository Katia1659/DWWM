<?php
include "../modele/Point.class.php";

//creation de la classe cercle
Class Cercle {

    //creation des attributs
    private Point $centre;
    private int $rayon;

    //creation de la method construct
    public function __construct($x, $y, $rayon)
    {
        $this->centre = new Point($x, $y);
        $this->rayon = $rayon;
    }

    //creation de la method perimetre
    public function getPerimetre():float{
        $perimetre = 2 * pi() * $this->rayon;
        return $perimetre ;
    }

    //creation de la method perimetre
    public function getSurface():float{
        $surface = $this->rayon * $this->rayon * pi();
        return $surface;
    }

    //creation de la method afficher
    public function afficher(){
        
        echo "CERCLE (".$this->centre->getOrdonne().",".$this->centre->getAbscisse().",".$this->rayon.")"."\n Le périmetre est ".$this->getPerimetre()."\n La surface est :".$this->getSurface()."\n";
    }

    //creation de la method appartient
    function appartient($point){

        $abscisse = $point ->getAbscisse();
        $ordonne = $point ->getOrdonne();
        echo "CERCLE(".$abscisse.",".$ordonne.")\n";
        if (sqrt((pow($this->centre->getAbscisse() - $abscisse, 2) + pow($this->centre->getOrdonne() - $ordonne, 2))) < $this->rayon ){
            echo "Le point appartient au cercle";
                     } else {
                    echo "Le point n'appartient pas au cercle"; }
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



?>