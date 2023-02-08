<?php 

Class Point
{
    private $xP;
    private $yP;

    public function __construct($xP,$yP)
    {
        $this->xP = $xP;
        $this->yP = $yP;

    }
    public function afficher()

    { 
 
     return "POINT(".$this->xP.",".$this->yP.")";
    
    } 

    /**
     * Get the value of xP
     */ 
    public function getXP()
    {
        return $this->xP;
    }

    /**
     * Set the value of xP
     *
     * @return  self
     */ 
    public function setXP($xP)
    {
        $this->xP = $xP;

        return $this;
    }

    /**
     * Get the value of yP
     */ 
    public function getYP()
    {
        return $this->yP;
    }

    /**
     * Set the value of yP
     *
     * @return  self
     */ 
    public function setYP($yP)
    {
        $this->yP = $yP;

        return $this;
    }
}