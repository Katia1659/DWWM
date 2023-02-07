<?php

/**
 * Classe Rectangle 
 * Attribut (longuer, largeur);
 */

class Rectangle
{
    private $longeur;
    private $largeur;

    /**
     * Constructeur Classe 
     * 
     */

    public function __construct($longeur, $largeur)
    {
        $this->longeur = $longeur;
        $this->largeur = $largeur;
    }

    /**
     * Méthode calcule perimetre
     * @return float;
     */

    public function perimetre(): float
    {
        $long = $this->longeur;
        $larg = $this->largeur;

        $perimetre = $long + $larg;
        return $perimetre;
    }

    /**
     * Méthode calcule aire
     * @return float;
     */

    public function aire(): float
    {
        $long = $this->longeur;
        $larg = $this->largeur;

        $aire = $long * $larg;
        return $aire;
    }

    /**
     * Méthode de vérification si le rectangle est carée
     * @return bool;
     */

    public function estCaree(): bool
    {
        $long = $this->longeur;
        $larg = $this->largeur;

        if ($long == $larg) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Méthode qui affiche le rectangle avec touts ces proprièties
     * @return void;
     */

    public function afficherRectangle():void
    {
        echo "Longuer du rectangle est: " . $this->longeur."\n";
        echo "Largeur du rectangle est: " . $this->largeur."\n";
        echo "Le périmetre du rectangle est: " . $this->perimetre()."\n";
        echo "L'aire' du rectangle est: " . $this->aire()."\n";
        if ($this->estCaree()) {
            echo "Le rectangle est: carée ";
        } else {
            echo "Le rectangle n'est pas carée ";
        }
    }


    /**
     * Get the value of longeur
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set the value of longeur
     *
     * @return  self
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get the value of largeur
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }
}
