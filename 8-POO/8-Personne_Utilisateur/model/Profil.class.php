<?php
//on defini la class Profil et ses attributs
Class Profil
{
    
    private static $codeId = 0;
    private int $id;
    private string $code;
    private string $libelle;

    //on defini le constucteur
    public function __construct( string $code, string $libelle)
    {
        self::$codeId++;
        $this->id = self::$codeId;
        $this->code = $code;
        $this->libelle = $libelle;
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
