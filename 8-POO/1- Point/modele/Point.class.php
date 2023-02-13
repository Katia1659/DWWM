<?php
Class Point{
    private $abscisse;
    private $ordonne;

    public function __construct ($x, $y){
        $this->abscisse = $x;
        $this->ordonne = $y;
      
    }

    public function norme(){
  
        $norme = sqrt(pow($this->abscisse,2)+pow($this->ordonne,2));

        return $norme;
        
    }


    /**
     * Get the value of abscisse
     */ 
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * Set the value of abscisse
     *
     * @return  self
     */ 
    public function setAbscisse($abscisse)
    {
        $this->abscisse = $abscisse;

        return $this;
    }

    /**
     * Get the value of ordonne
     */ 
    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * Set the value of ordonne
     *
     * @return  self
     */ 
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;

        return $this;
    }
    
    
}

?>