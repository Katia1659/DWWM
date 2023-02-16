<<<<<<< HEAD
<?php 

class Profil {
    private int $id ;
    private string $code ;
    private string $libelle;

    public function __construct () {
        
    }

=======
<?php

// Création de l'objet et initialisation des attributs
Class Profil{ 
    private int $id;     
    private string $libelle ; 
    private string $code ;
    public static $compteur ;

    public function __construct($libelle,$code)
    {   
        self:: $compteur++; 
        $this -> id = self:: $compteur;
        $this -> libelle = $libelle;
        $this -> code = $code;
    }
    
>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1

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
<<<<<<< HEAD
}


=======

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */ 
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }
}



>>>>>>> 5e9356344e56f8603aed19ecfd277b1c35ab68d1
?>