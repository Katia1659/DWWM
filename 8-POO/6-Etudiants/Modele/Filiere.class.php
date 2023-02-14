<?php

class Filiere
{ //ATTRIBUTS
    private $id;
    private $code;
    private $libelle;
    public static $compteur;

    //CONTRUCTION
    public function __construct(string $code, string $libelle)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function __toString()
    {
        return "Filière : ".$this -> libelle." \n";
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
