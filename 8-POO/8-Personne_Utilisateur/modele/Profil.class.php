<?php

class Profil
{
 
    protected String $code;
    protected String $libelle;
  
    public static $compteur = 1;
    protected int $id;

public function __construct($code,$libelle)
{

    $this->code = $code;
    $this->libelle = $libelle;
    
    self::$compteur++;
    $this->id = self::$compteur;

}

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}