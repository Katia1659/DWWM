<?php
include_once "../modele/Etudiant.class.php";
class filiere {
    private $id;
    private static $code = 0;
    private $libelle;

        public function __construct($id, $code, $libelle){
            $this::$code++;
            $this->code=self::$code;
            $this->id;
            $this->code;
            $this->libelle;
        } 
        public function __toString()
        {
            return $this->code;
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
?>