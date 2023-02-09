<?php 
include "../Model/Point.class.php";

Class Cercle{
    private Point $centre;
    private $rayon;


    public function __construct($abcsisse,$ordonnee,$rayon){
        $this->rayon = $rayon;
        $this->centre = new Point($abcsisse,$ordonnee);
    }
    public function getPerimetre($rayon){
        $perimetre = 2*pi()*$rayon;
        return $perimetre;
    }
    public function getSurface($rayon){
        $surface = pi()*($rayon**2);
        return $surface;
    }
    public function appartient($abcsisse2,$ordonnee2){
        $abcsisse = $this->centre->getAbscisse();
        $ordonnee= $this->centre->getOrdonnee();
        $rayon = $this->getRayon();
        if (((($abcsisse-$abcsisse2)**2)+(($ordonnee-$ordonnee2)**2))<=$rayon**2) {
            echo "Le point appartient au cercle";
        }else{
            echo "Le point n'appartient pas au cercle";
        }
    }
    public function affichageCercle(){
        $abcsisse = $this->centre->getAbscisse();
        $ordonnee= $this->centre->getOrdonnee();
        $rayon = $this->getRayon();
        $perimetre = $this->getPerimetre($rayon);
        $surface = $this->getSurface($rayon);
        echo "Cercle($abcsisse,$ordonnee,$rayon) \nLe périmètre est de : $perimetre \nLa surface est de : $surface \n Donnez un point : \n";



        
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