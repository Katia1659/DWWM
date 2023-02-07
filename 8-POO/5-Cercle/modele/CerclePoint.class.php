<?php 

// Point

Class Point {
   private $x;
   private $y;
   public function __construct($x,$y){
      $this->x = $x;
      $this->y = $y;
   }

   /**
    * Get the value of x
    */ 
   public function getX()
   {
      return $this->x;
   }

   /**
    * Set the value of x
    *
    * @return  self
    */ 
   public function setX($x)
   {
      $this->x = $x;

      return $this;
   }

   /**
    * Get the value of y
    */ 
   public function getY()
   {
      return $this->y;
   }

   /**
    * Set the value of y
    *
    * @return  self
    */ 
   public function setY($y)
   {
      $this->y = $y;

      return $this;
   }
   public function afficher (): void{
      echo"POINT($this->x,$this->y)\n";
   }
   
}

// Cercle 


Class Cercle {
   private $x;
   private $y;
   private $rayon;
   public function __construct($x,$y, $rayon){
      $this->x = $x;
      $this->y = $y;
      $this->rayon = $rayon;
   }

   /**
    * Get the value of x
    */ 
   public function getX()
   {
      return $this->x;
   }

   /**
    * Set the value of x
    *
    * @return  self
    */ 
   public function setX($x)
   {
      $this->x = $x;

      return $this;
   }

   /**
    * Get the value of y
    */ 
   public function getY()
   {
      return $this->y;
   }

   /**
    * Set the value of y
    *
    * @return  self
    */ 
   public function setY($y)
   {
      $this->y = $y;

      return $this;
   }

   /**
    * Get the value of rayon
    */ 
   public function getRayon()
   {
      return $this->rayon;
   }

   /**
    * Set the value of rayon
    *
    * @return  self
    */ 
   public function setRayon($rayon)
   {
      $this->rayon = $rayon;

      return $this;
   }
   public function getPerimetre() {
      pi();
      $perimetre = 2 * M_PI * $this->rayon; 
      echo "Le périmètre est : $perimetre \n";
   }
   public function getSurface(){
      pi();
      $surface = ($this->rayon*$this->rayon) * M_PI;
      echo "La surface est : $surface \n";
   }
   public function afficher () {
      echo "CERCLE($this->x,$this->y,$this->rayon) \n";
   }
   public function dansLeCercle($abscisse,$ordonne){
      //$result = sqrt(pow($x-$this->x)+pow($y-($this->y)));
      $powX = pow($abscisse - $this->x,2);
      $powY = pow($ordonne- $this->y,2);
      $distance = sqrt($powX + $powY);
      if ($distance > $this->rayon){
         echo"Le point n'est pas dans le cercle";
      }
      else {
         echo "Le point est dans le cercle ";
      }
   }
}
?>