<?php

//classe
class Rectangle 
{
    private $longueur;
    private $largeur;

    //Constructeur d'initialisation
    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }


    //===================== Méthodes =====================

    public function perimetre(): string{
        $perimetre = ($this->longueur*2)+($this->largeur*2);
        return "Le périmètre est de ". $perimetre;
    }

    public function aire(): string{
        $aire = $this->longueur * $this->largeur;
        return "La surface est de ". $aire;
    }

    public function estCarre(): bool{
        if($this->longueur == $this->largeur){
            $carre = true ;
        }else{
            $carre = false ;
        }
        return $carre;
    }

    public function afficherRectangle(): string{

        //appeler les fonctions précédentes avec this 
        $perimetre = $this->perimetre();
        $aire = $this->aire();
        $carre = $this->estCarre();

        if($carre == true){
            $carreResult = "c'est un carré";
        }else{
            $carreResult =  "ce n'est pas un carré";
        }


        //définition de la méthode
        $afficher = "Longueur: [". $this->longueur. "] - Largeur: [". $this->largeur. "] - Périmètre: [". $perimetre . "] - Aire: [".$aire. "] -". $carreResult;
        return $afficher;
    }

    //===================== Méthodes d'accès =====================

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