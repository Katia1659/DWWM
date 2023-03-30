<?php

Class Rectangle {
    private $longueur;
    private $largeur;


// Initialisation des attributs.
public function __construct($longueur, $largeur)
{
    $this -> longueur = $longueur ;
    $this -> largeur = $largeur ;
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

// Creation de la méthode calculant le perimetre du rectangle
public function perimetre(){
    $long = $this -> getLongueur();
    $larg = $this -> getLargeur();
    $perimetre = ($long+$larg)*2;
     echo "Le périmétre est ".$perimetre; 
}

// Creation de la méthode calculant l'aire du rectangle
public function aire(){
    $long = $this -> getLongueur();
    $larg = $this -> getLargeur();
    $aire = $long * $larg;
    echo "La surface est ". $aire;
}

// Creation de la méthode calculant si le rectangle est carré 

public function estCarre() {
    if($this-> longueur == $this -> largeur){
        true;
    } else {
        false;
    }
}


// Creation de la méthode d'affichage
public function afficherRectangle () {


    $long = $this -> getLongueur();
    $larg = $this -> getLargeur();
    echo "- Longueur : ".$long." - Largeur : ".$larg." - Périmétre : ".(($long+$larg)*2)." - Aire : ".($long * $larg)."\n";
    if($this-> longueur == $this -> largeur) {
        true ;
    } else {
        false ;
    }
}

    
}
