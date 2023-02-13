<?php

/**
 * Classe Filiere
 */

class Filiere 
{
    /**
     * Attributs :
     */

     private $id;
     private $code;
     private $libelle;

    /**
     * Constructeur Filiere
     */

    public function __construct($code, $libelle)
    {
        $this->id++;
        $this->code=$code;
        $this->libelle=$libelle;        
    }

    /**
     * Méthode toString()
     * @return string
     */
    public function __toString()
    {
       return "Filiere: ".$this->libelle.".";
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