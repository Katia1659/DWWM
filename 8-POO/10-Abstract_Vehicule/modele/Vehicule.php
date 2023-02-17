<?php

abstract class Vehicule
{
    protected $matricule;
    protected $annee;
    protected $modele;
    protected $prix;
    public static $count;

    /**
     * @param $annee
     * @param $modele
     * @param $prix
     */
    public function __construct($annee, $modele, $prix)
    {
        self::$count++;
        $this->matricule=self::$count;
        $this->annee = $annee;
        $this->modele = $modele;
        $this->prix = $prix;
    }

    /**
     * Méthode Demarrer()
     * @return string
     */

    abstract public function demarrer();

    /**
     * Méthode accelerer
     * @return string
     */

    abstract public function accelerer();


    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return " modele: ".$this->modele.", année de sortie: ".$this->annee.", prix: ".$this->prix." €.\n"
              ."Ematriculer: ".$this->matricule;
    }


    /**
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }





}