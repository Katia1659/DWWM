<?php

/**
 * class Profile
 */

class Profile
{
    private int $id=0;
    private string $code;
    private string $libelle;

    /**
     * constructeur Profile
     */
    public function __construct(string $code, string $libelle)
    {
        $this->code=$code;
        $this->libelle=$libelle;
        $this->id++;
        
    }

    /**
     * Methode to String ()
     * 
     * @return string 
     */
    public function __toString(): string
    {
        return $this->libelle;
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