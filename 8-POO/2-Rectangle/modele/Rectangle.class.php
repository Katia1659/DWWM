<?php

class Rectangle {

    //attributs 
    private $largeur;
    private $longueur;


    //methode construct
    public function __construct($lon,$lar){
        $this->largeur = $lar;
        $this->longueur = $lon;       
    }


    //methodes perimetre
    public function perimetre(){
        $lar = $this -> getLargeur();
        $lon = $this -> getLongueur();

        $perim = ($lar + $lon)*2;
        return $perim;
    }


    //methodes aire
    public function aire(){

        $lar = $this -> getLargeur();
        $lon = $this -> getLongueur();

        $aire = ($lar * $lon);
        return $aire;
    }


    //methodes est carre
    public function estCarre() : bool{

        $lar = $this -> getLargeur();
        $lon = $this -> getLongueur();

        if ($lar == $lon) {
            return true;
        }else{
            return false;
        } 
        
    }


    // affiche les données et si c'est un carre ou non
    public function afficherRectangle() : void{

        $lar = $this -> getLargeur();
        $lon = $this -> getLongueur();

        echo "la largeur : $lon - largeur : $lar - périmétre : ".$this->perimetre()." - aire : ".$this->aire()." - ";


        if ($this->estCarre()== true) {
            echo "c'est un carre";
        }elseif ($this->estCarre()== false) {
            echo "ce n'est pas un carre";
        }

    }


    //get et set des attributs 
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
     * Get the value of longueur
     */ 
    public function getLongueur()
    {
        return $this->longueur;
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