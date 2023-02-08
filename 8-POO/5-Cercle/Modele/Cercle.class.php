<?php

include '../Modele/Point.class.php';

Class Cercle {
        private Point $centre;
        private $rayon;
    
    // Création de la méthode construct
    
        public function __construct($x, $y, $rayon)
        {
            $this->centre = new Point($x, $y);
            $this->rayon = $rayon;
        }


        public function getPerimetre () : void {
                $perimetre = 2 * pi() * $this->rayon;
                echo "Le périmètre est : ". $perimetre;
        }


        public function getSurface() : void {
        $aire = $this->rayon * $this->rayon * pi(); 
        echo "La surface est : ".$aire;
        }

        public function appartient($point) : void {

                $x = $point->getAbcisse();
                $y = $point->getOrdonnee();

        if (sqrt((pow($this->centre->getAbcisse() - $x, 2) + pow($this->centre->getOrdonnee() - $y, 2))) < $this->rayon ){
        // if (($this->x * $this->x - $a * $a) +  ($this->y * $this->y - $b * $b) == $this->rayon * $this->rayon) {
        echo "Le point appartient au cercle";
         } else {
        echo "Le point n'appartient pas au cercle"; }
        }

        public function afficher() : void {
                echo "Cercle( ".$this->centre->getAbcisse() .", ". $this->centre->getOrdonnee().", ".$this->rayon." )";
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
         * Get the value of _centre
         */ 
        public function get_centre()
        {
                return $this->centre;
        }

        /**
         * Set the value of _centre
         *
         * @return  self
         */ 
        public function set_centre($_centre)
        {
                $this->centre = $_centre;

                return $this;
        }
}