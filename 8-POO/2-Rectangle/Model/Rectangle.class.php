<?php


//On définie la class Rectangle avec ses propriétés
Class Rectangle{
    private $longueur;
    private $largeur;
    
//On définie ses méthodes 
    public function __construct($longueur,$largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
                
    }

    public function perimetre($longueur,$largeur):float{
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        $perimetre = ($largeur*2) + ($longueur*2);
        return $perimetre;
    }

    public function aire($longueur,$largeur):float{
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        $aire = ($largeur*$longueur);
        return $aire;
    }

    public function estCarre($longueur,$largeur):bool{
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        if ($longueur==$largeur) {
            return true;
        }else{
            return false;
        }
    }

    public function afficherRectangle(){
        $longueur = $this->getLongueur();
        $largeur = $this->getLargeur();
        $perimetre = $this->perimetre($longueur,$largeur);
        $aire = $this->aire($longueur,$largeur);
        $estCarre = $this->estCarre($longueur,$largeur);
        if ($estCarre==true) {
            $affichage = "Longueur : $longueur cm \nLargeur : $largeur cm \nLe périmètre est de : $perimetre cm \nL'aire est de $aire cm² \nLe rectangle est un carré.";
        }else {
            $affichage = "Longueur : $longueur cm \nLargeur : $largeur cm \nLe périmètre est de : $perimetre cm \nL'aire est de $aire cm² \nLe rectangle n'est pas un carré.";
        }
        echo $affichage;   
    }
//Tous les getter/setter 
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