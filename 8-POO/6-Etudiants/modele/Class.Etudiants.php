<?php

class Etudiant{

    
    private static $id = 0;
    private $nom;
    private $prenom;
    private $dateNaiss;
    private $code;



    public function __construct($nom,$prenom,$dateNaiss)
    {
        $this:: $id++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;

        $this->code = self::$id;

    }

 // a modifier !! 

    public function __toString()
    {
        
        $nom = ucwords($this->nom);
        $prenom = ucwords($this->prenom);
        $dateNaiss = $this->getDateNaiss();
        $retour =  "Je suis l'étudiant $nom $prenom ma date de naisance est : $dateNaiss";
        return $retour;
    }




    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }
}



?>