<?php

class Filiere {

    private Etudiant $_etudiant;
    private static $id = 0;
    private $code;
    private $libelle;


    public function __construct($libelle)
    {
        $this:: $id++;
        
        $this->code = self::$id;
        $this->libelle = $libelle;
    }

    public function __toString()
    {
        // $this->_etudiant = new Etudiant($nom,$prenom,$dateNaiss);
        

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

    /**
     * Get the value of _etudiant
     */ 
    public function get_etudiant()
    {
        return $this->_etudiant;
    }

    /**
     * Set the value of _etudiant
     *
     * @return  self
     */ 
    public function set_etudiant($_etudiant)
    {
        $this->_etudiant = $_etudiant;

        return $this;
    }
}




?>