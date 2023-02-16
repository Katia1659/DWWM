<?php

abstract class Vehicule{

    //declare attributs 
    public static $counter = 0;
    protected int$_matricule;
    protected int $_annee;
    protected string $_modele;
    protected float $_prix;


    //methode construct du vehicule
    public function __construct($_annee,$_modele,$_prix){
        self::$counter++;
        $this->_matricule = self::$counter;
        $this->_annee = $_annee;
        $this->_modele = $_modele;
        $this->_prix = $_prix;
    }

    //methode toString qui affiche un message qui sera repris par les enfants

   public function __toString(){
    return "le matricule est : ". $this->_matricule. " \nle modele est : ".$this->_modele. "\nson prix est de : ". $this->_prix."€". "\nl'année du modele est : ". $this->_annee;
   }

   //methode accelerer
   abstract public function accelerer();
   //methode demarrer
   abstract public function demarrer();

   // get et set des attributs
    /**
     * Get the value of counter
     */ 
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set the value of counter
     *
     * @return  self
     */ 
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get the value of _matricule
     */ 
    public function get_matricule()
    {
        return $this->_matricule;
    }

    /**
     * Set the value of _matricule
     *
     * @return  self
     */ 
    public function set_matricule($_matricule)
    {
        $this->_matricule = $_matricule;

        return $this;
    }

    /**
     * Get the value of _annee
     */ 
    public function get_annee()
    {
        return $this->_annee;
    }

    /**
     * Set the value of _annee
     *
     * @return  self
     */ 
    public function set_annee($_annee)
    {
        $this->_annee = $_annee;

        return $this;
    }

    /**
     * Get the value of _modele
     *
     * @return string
     */
    public function get_modele(): string
    {
        return $this->_modele;
    }

    /**
     * Set the value of _modele
     *
     * @param string $_modele
     *
     * @return self
     */
    public function set_modele(string $_modele): self
    {
        $this->_modele = $_modele;

        return $this;
    }

    /**
     * Get the value of _prix
     *
     * @return float
     */
    public function get_prix(): float
    {
        return $this->_prix;
    }

    /**
     * Set the value of _prix
     *
     * @param float $_prix
     *
     * @return self
     */
    public function set_prix(float $_prix): self
    {
        $this->_prix = $_prix;

        return $this;
    }
}
?>