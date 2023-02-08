<?php

class Rectangle{
    private $longueur;
    private $largeur;


public function __construct($longueur, $largeur){
    $this->longueur = $longueur;
    $this->largeur = $largeur;

}

public function perim(){
    $longueur = $this->getlongueur();
    $largeur = $this->getlargeur();
    $resultPerim = ($longueur + $largeur)*2;
    return "Le périmetre du rectangle est $resultPerim";

}

public function surface(){
    $longueur = $this->getlongueur();
    $largeur = $this->getlargeur();
    $resultSurf = ($longueur * $largeur);
    return "La surface du réctangle est $resultSurf";
}

public function ouiNon(){
    $longueur = $this->getlongueur();
    $largeur = $this->getlargeur();
    if ($longueur == $largeur) {
        echo"c'est un carré";
    }else {
        echo"ce n'est pas un carré";
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