<?php

class Manager extends Personne
{ //ATTRIBUTS
    private $service;
    //CONTRUCTION
    public function __construct($service)
    {
     $this -> service = $service;
    }


    abstract function calculerSalaire()
    {

    }





    public function __toString()
    {
        return "$this->service";
    }




    

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}
