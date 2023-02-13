
<?php

Class Cercle
{
    private $x;
    private $y;
    private $rayon;

    public function __construct($x,$y,$rayon)
    {
        $this->x = $x;
        $this->y = $y;
        $this->rayon = $rayon;

    }
    
     public function getPerimetre() 
    {
        
         $peri = 2*pi()*$this->rayon;

         return $peri;
          
    }

     public function getSurface() 
    {

        $surface = pi()*pow($this->rayon,2);

        return $surface;
    }


     public function appartient($xP,$yP) {    
        


$calcul = ($xP - $this->x)**2 + ($yP - $this->y)**2;

if ($calcul < pow($this->rayon,2)) 

{
    return "Le point appartient au cercle"."\n";

} else {

    return "Le point n'appartient pas au cercle"."\n";
}
}



    public function afficher()

   { 
    return "CERCLE(".$this->x.",".$this->y.",".$this->rayon.")"."\n";
  
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
   }