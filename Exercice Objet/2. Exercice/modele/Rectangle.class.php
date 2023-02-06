<?php
Class Rectangle{
    private $longueur;
    private $largeur;

    public function __construct ($long,$larg){
        $this->longueur = $long;
        $this->largeur = $larg;

    }

// Fonction pour le perimètre

    public function perimetre(){

        $perimetre = ($this->longueur + $this->largeur) * 2;

        return $perimetre;

    }

    // Fonction pour l'aire du rectangle
    public function aire(){

        $surface = $this->longueur * $this->largeur;

        return $surface;

    }

    // Fonction si le rectangle est carré ou non
    public function estCarre(){

    if ($this->longueur == $this->largeur){

        return true;
    }
    else{
        return false;
    }

    }


    // Affichage du rectangle
    public function afficherRectangle(){

        echo "\n" . "La longueur du carré est de :" . $this->longueur."\n";
        echo "La largeur du carré est de :" . $this->largeur."\n";
        echo "Le périmétre du carré est de : " .$this->perimetre()."\n";
        echo "L'Aire du carré est de : " .$this->aire(). "\n";
        
        if($this->estCarre()){

            echo "\n"."Il s'agit d'un carré";
        }
        else{
            echo "\n"."Il ne s'agit pas d'un carré";
        }
    }

    /**
     * Get the value of longueur
     */ 
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

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

?>