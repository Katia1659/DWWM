<?php

// Création de l'objet Point 
class Point
{
    private $abscisse;
    private $ordonnee;


    // Initialisation des attributs.
    public function __construct($x, $y)
    {
        $this->abscisse = $x;
        $this->ordonnee = $y;
    }

    // Création de la méthode d'affichage 
    public function afficher()
    {
        echo  "POINT (" . $this->abscisse . "," . $this->ordonnee . ")";
    }

    // Création de la méthode indiquant la distance d'un point donné 
    public function norme()
    {
        $distance = sqrt(($this->abscisse * $this->abscisse) + ($this->ordonnee * $this->ordonnee));
        return "la norme du point (" . $this->abscisse . "," . "$this->ordonnee" . ") est : " . "$distance";
    }


    /**
     * Get the value of abcisse
     */
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */
    public function setAbscisse($abcisse)
    {
        $this->abscisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */
    public function getOrdonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */
    public function setOrdonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }
}
