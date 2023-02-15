<?php
//création de la class profile
class Profile{
    //initialisation des attributs de la class
    private static $id;
    private string $code;
    private string $libelle;
//initialisation du constructeur de la class
    public function __construct($code,$libelle){
        $this->code = $code;
        $this->libelle = $libelle;        
    }
//tous les getter & setter
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




?>