<?php

include_once "../modele/Point.class.php";

class Cercle
{
    private Point $centre;
    private $rayon;

    // Initialisation des attributs.
    public function __construct($x, $y, $rayon)
    {
        $this->centre = new Point($x, $y);
        $this->rayon = $rayon;
    }


    // Création de la méthode calculant le périmètre 
    public function getPerimetre(): float
    {
        $perimetre = 2 * pi() * $this->rayon;
        return $perimetre;
    }

    // Création de la méthode calculant l'aire
    public function getSurface(): float
    {
        $aire = $this->rayon * $this->rayon * pi();
        return $aire;
    }

    // Création de la méthode d'affichage dus données saisies par l'utilisateur
    public function afficher()
    {
        echo  "CERCLE (" . $this->centre->getAbscisse() . ",", $this->centre->getOrdonnee() . ",",  $this->rayon . ") \nLe périmètre est : " . $this->getPerimetre() . "\nLa surface est : " . $this->getSurface();
    }

    // Création de la méthode indiquant si le point donné appartient au cercle ou non 
    public function appartient($pointP)
    {
        $abs = $pointP->getAbscisse();
        $ord = $pointP->getOrdonnee();

        if (sqrt((pow($this->centre->getAbscisse() - $abs, 2) + pow($this->centre->getOrdonnee() - $ord, 2))) < $this->rayon) {
            echo "Le point appartient au cercle";
        } else {
            echo "Le point n'appartient pas au cercle";
        }
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
