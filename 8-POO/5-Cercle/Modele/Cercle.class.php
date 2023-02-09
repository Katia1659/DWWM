<?php

include '../Modele/Point.class.php';

// Création de la classe Cercle

Class Cercle {
        private Point $centre;
        private $rayon;
    
// On crée la méthode construct qui initialise les attributs de l'objet
    
        public function __construct($x, $y, $rayon)
        {
            $this->centre = new Point($x, $y);
            $this->rayon = $rayon;
        }

        // On crée la méthode getPerimetre qui calcule le périmètre du cercle

        public function getPerimetre () : void {
                $perimetre = 2 * pi() * $this->rayon;
                echo "Le périmètre est : ". $perimetre;
        }

// On crée la méthode getSurface qui permet de calculer l'aire du cercle

        public function getSurface() : void {
        $aire = $this->rayon * $this->rayon * pi(); 
        echo "La surface est : ".$aire;
        }

// On crée la méthode appartient qui permet de savoir si un point donné appartient à un cercle ou non

        public function appartient($point) : void {

                $x = $point->getAbcisse();
                $y = $point->getOrdonnee();

        if (sqrt((pow($this->centre->getAbcisse() - $x, 2) + pow($this->centre->getOrdonnee() - $y, 2))) < $this->rayon ){
        // if (($this->x * $this->x - $a * $a) +  ($this->y * $this->y - $b * $b) == $this->rayon * $this->rayon) {
        echo "Le point appartient au cercle";
         } else {
        echo "Le point n'appartient pas au cercle"; }
        }

// La méthode afficher permet d'afficher les caractéristiques du cercle.

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