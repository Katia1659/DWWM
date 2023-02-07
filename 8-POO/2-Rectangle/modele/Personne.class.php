<?php 
Class Rectangle {
   private $longueur;
   private $largeur;
   private $aire;
   private $perimetre;
   private $carreOrNot;  
   public function __construct($longueur, $largeur){
      $this->longueur = $longueur;
      $this->largeur = $largeur;

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
      $perimetre = (2*($this->longueur)+2*($this->largeur));
      //Echo "Le perimetre du rectangle est de : $perimetre";
      return $this->perimetre = $perimetre;
   }
   public function aire(){
      $aire = ($this->longueur)*($this->largeur);
      //Echo "L'air du rectangle est de : $aire";
      return $this->aire =$aire;
}

public function estCarre(): bool{
   if (($this->largeur)!=($this->longueur)) {
      true;
      return $this->carreOrNot = true;
   }
   else {
      false;
      return $this->carreOrNot = false;
   }
}
	public function afficherRectangle(){

     echo"\n-Longueur : [$this->longueur] \n- Largeur : [$this->largeur] \n- Périmètre : [$this->perimetre] \n- Aire : [$this->perimetre] -
     ";
     if ($this->carreOrNot) {
      echo "Il ne s’agit pas d’un carré\n";
   }
   else {
      echo "Il s’agit d’un carré\n";
      
}
   }
}