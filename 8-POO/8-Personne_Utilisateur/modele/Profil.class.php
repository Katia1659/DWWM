<?php 

class Profil {
    private static $codeId = 0;
    private int $id;
    private string $code;
    private string $libelle;

    public function __construct($code,$libelle)
    {
        self::$codeId++;
        $this->id = self::$codeId;
        $this->code = $code;
        $this->libelle = $libelle;
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
     * Get the value of codeId
     */ 
    public function getCodeId()
    {
        return $this->codeId;
    }

    /**
     * Set the value of codeId
     *
     * @return  self
     */ 
    public function setCodeId($codeId)
    {
        $this->codeId = $codeId;

        return $this;
    }
}

?>