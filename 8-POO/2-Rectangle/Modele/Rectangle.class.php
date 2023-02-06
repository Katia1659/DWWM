<?php

Class Rectangle {
    private $longueur;
    private $largeur;

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


public function perimetre(){
    $long = $this -> getLongueur();
    $larg = $this -> getLargeur();
    $perimetre = ($long+$larg)*2;
     echo "Le périmétre est ".$perimetre; 
}

public function aire(){
    $long = $this -> getLongueur();
    $larg = $this -> getLargeur();
    $aire = $long * $larg;
    echo "La surface est ". $aire;
}

public function estCarre() {
    if($this-> longueur == $this -> largeur){
        true;
    } else {
        false;
    }
}

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
