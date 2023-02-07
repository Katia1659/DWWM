<?php
Class Rectangle{
    private $longueur;
    private $largeur;

    public function __construct($longueur,$largeur){

        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function perimetre(): string{
        $perimetre =  ($this->longueur*2)+($this->largeur*2);
        return "Le perimetre est de : " . $perimetre;
    }

   public function aire(){
        $air = ($this->longueur)*($this->largeur);
        return "L'air  est de  : " . $air;
   }

   public function estCarre(): bool {
        if ($this->longueur == $this->largeur) {
            return true;
        }else {
            return false;
        }
       
   }

   public function afficherRectangle(): string{
        if ($this->longueur == $this->largeur) {
            $perimetre =  ($this->longueur*2)+($this->largeur*2);
            $air = ($this->longueur)*($this->largeur);
            return "- Longeur : ".$this->longueur."- Largeur : ".$this->largeur."- Périmétre : ".$perimetre."- Aire : ".$air."- il s'agit d'un carre";
        }else {
            $perimetre =  ($this->longueur*2)+($this->largeur*2);
            $air = ($this->longueur)*($this->largeur);
            return "- Longeur : ".$this->longueur."- Largeur : ".$this->largeur."- Périmétre : ".$perimetre."- Aire : ".$air."- il ne s'agit pas d'un carre";
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