<?php

class Rectangle
{
    //Initialisation des attributs
    private $longueur;
    private $largeur;
    private $uniteMesure;
    public function __construct( $longueur, $largeur, $uniteMesure){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->uniteMesure = $uniteMesure;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    /**
     * @return mixed
     */
    public function getUniteMesure()
    {
        return $this->uniteMesure;
    }

    /**
     * @param mixed $uniteMesure
     */
    public function setUniteMesure($uniteMesure): void
    {
        $this->uniteMesure = $uniteMesure;
    }
    //Premiere methods qui permet de calculer le périmètre.
    public function perimetre(){
        $long = $this->getLongueur();
        $larg = $this->getLargeur();
        $perimetre = ($long + $larg) * 2;
        return $perimetre;
    }
    //Deuxième methods qui permet de calculer l'aire'.
    public function aire(){
        $long = $this->getLongueur();
        $larg = $this->getLargeur();
        $aire = $long * $larg;
        return $aire;
    }
    //Troisème methods qui permet de savoir si c'est un carré.
    public function estCarre(){
        $long = $this->getLongueur();
        $larg = $this->getLargeur();
        if ($long === $larg){
            return true;
        }else{
            return false;
        }
    }
    //Quatrième methods qui permet d'afficher
    public function afficherRectangle(){
        $long = $this->getLongueur();
        $larg = $this->getLargeur();
        $perimetre = $this->perimetre();
        $aire = $this->aire();
        $carre = $this->estCarre();
        $uniteMesure = $this->getUniteMesure();

        echo "Longueur: $long $uniteMesure \n";
        echo "Largeur: $larg $uniteMesure \n";
        echo "Périmètre: $perimetre \n";
        echo "Aire: $aire $uniteMesure ² \n";
        if ($carre){
            echo "Il s'agit d'un carré \n \n";
        }else {

            echo "Il ne s'agit pas d'un carré \n \n";
        }
    }

}